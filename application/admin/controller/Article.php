<?php

namespace app\admin\controller;

use think\Db;
use app\admin\model\Article as ArticleModel;
class Article extends Base
{
    /*文章列表*/
    public function lst()
    {
        $list = ArticleModel::paginate(3);
        $this->assign('list', $list); // 模板变量赋值
        return $this->fetch('list');
    }

    /*添加文章*/
    public function add()
    {
        if (request()->isPost()) {

            // 获取表单输入数据input()
            $data = [
                'title' => input('title'),
                'author' => input('author'),
                'keywords' => str_replace('，', ',', input('keywords')),
                'desc' => input('desc'),
                'cateid' => input('cateid'),
                'content' => input('content'),
                'time' => time(),
            ];
            if (input('state') == 'on') {
                $data['state'] = 1;
            }
            if ($_FILES['pic']['tmp_name']) {
                $file = request() ->file('pic');
                $info = $file->move(ROOT_PATH . 'public' . DS . 'static/uploads');
                $data['pic'] = '/uploads/' . $info->getSaveName();
            }
            // 调用验证器判断输入操作
            $validate = \think\Loader::validate('Article');
            if(!$validate->scene('add')->check($data)){
                $this -> error($validate -> getError());
                die;
            }

            // 添加操作
            if (Db::name('Article')->insert($data)) {
                return $this->success('添加文章成功!', 'lst');
            } else {
                return $this->error('添加文章失败!');
            }
            return;
        }

        //所属栏目查询并显示
        $caters = db('cate')->select();
        $this->assign('caters', $caters);

        return $this->fetch('add');
    }

    /*删除文章*/
    public function del()
    {
        if (db('Article')->delete(input('id'))){
            $this->success('删除文章成功!', 'lst');
        } else {
            $this->error('删除文章失败!');
        }

    }

    /*编辑文章*/
    public function edit()
    {
        $id = input('id');
        $article = db('Article')->find($id); // 查找指定id的数据
        //dump($Articles); die;
        if (request() -> isPost()) {
            // 获取输入数据
            $data = [
                'id' => input('id'),
                'title' => input('title'),
                'author' => input('author'),
                'keywords' => str_replace('，', ',', input('keywords')),
                'desc' => input('desc'),
                'cateid' => input('cateid'),
                'content' => input('content'),
            ];

            if (input('state') == 'on') {
                $data['state'] = 1;
            } else {
                $data['state'] = 0;
            }
            if ($_FILES['pic']['tmp_name']) {
                @unlink('../public/static' . $article['pic']);// 删除原来的缩略图
                $file = request()->file('pic');
                $info = $file->move(ROOT_PATH . 'public' . DS . 'static/uploads');
                $data['pic'] = '/uploads/' . $info->getSaveName();
            }
            // 调用验证器判断输入操作
            $validate = \think\Loader::validate('Article');
            if(!$validate->scene('edit')->check($data)){
                $this -> error($validate -> getError());
                die;
            }

            // 更新数据库操作
            if (db('Article')->update($data)) {
                $this->success('修改文章成功!', 'lst');
            } else {
                $this->error('修改文章失败!');
            }
            return;
        }
        //所属栏目查询并显示
        $caters = db('cate')->select();
        $this->assign('caters', $caters);

        $this->assign('article', $article);
        return $this->fetch();
    }
}
