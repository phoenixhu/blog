<?php

namespace app\admin\controller;

use think\Controller;
use think\Db;
use app\admin\model\Links as LinksModel;
class Links extends Controller
{
    /*链接列表*/
    public function lst()
    {
        $list = LinksModel::paginate(3);
        $this->assign('list', $list); // 模板变量赋值
        return $this->fetch('list');
    }

    /*添加链接*/
    public function add()
    {
        if (request()->isPost()) {

            // 获取表单输入数据input()
            $data = [
                'title' => input('title'),
                'url' => input('url'),
                'desc' => input('desc'),
            ];

            // 调用验证器判断输入操作
            $validate = \think\Loader::validate('Links');
            if(!$validate->scene('add')->check($data)){
                $this -> error($validate -> getError());
                die;
            }

            // 添加操作
            if (Db::name('Links')->insert($data)) {
                return $this->success('添加链接成功!', 'lst');
            } else {
                return $this->error('添加链接失败!');
            }
            return;
        }
        return $this->fetch('add');
    }

    /*删除链接*/
    public function del()
    {
        if (db('Links')->delete(input('id'))){
            $this->success('删除链接成功!', 'lst');
        } else {
            $this->error('删除链接失败!');
        }

    }

    /*编辑链接*/
    public function edit()
    {
        $id = input();
        $links = db('links')->find($id); // 查找指定id的数据
        //dump($Linkss); die;
        if (request() -> isPost()) {
            // 获取输入数据
            $data = [
                'id' => input('id'),
                'title' => input('title'),
                'url' => input('url'),
                'desc' => input('title'),
            ];

            // 调用验证器判断输入操作
            $validate = \think\Loader::validate('links');
            if(!$validate->scene('edit')->check($data)){
                $this -> error($validate -> getError());
                die;
            }

            // 更新数据库操作
            if (db('links')->update($data)) {
                $this->success('修改链接成功!', 'lst');
            } else {
                $this->error('修改链接失败!');
            }
            return;
        }

        $this->assign('links', $links);
        return $this->fetch();
    }
}
