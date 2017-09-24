<?php

namespace app\admin\controller;

use think\Controller;
use think\Db;
use app\admin\model\Cate as CateModel;

class Cate extends Controller
{
    /*栏目列表*/
    public function lst()
    {
        $list = CateModel::paginate(3);
        $this->assign('list', $list); // 模板变量赋值
        return $this->fetch('list');
    }

    /*添加栏目*/
    public function add()
    {
        if (request()->isPost()) {

            // 获取表单输入数据input()
            $data = [
                'catename' => input('catename'),
            ];

            // 调用验证器判断输入操作
            $validate = \think\Loader::validate('Cate');
            if(!$validate->scene('add')->check($data)){
                $this -> error($validate -> getError());
                die;
            }

            // 添加操作
            if (Db::name('cate')->insert($data)) {
                return $this->success('添加栏目成功!', 'lst');
            } else {
                return $this->error('添加栏目失败!');
            }
            return;
        }
        return $this->fetch('add');
    }

    /*删除栏目*/
    public function del()
    {

        if (db('cate')->delete(input('id'))){
            $this->success('删除栏目成功!', 'lst');
        } else {
            $this->error('删除栏目失败!');
        }

    }

    /*编辑栏目*/
    public function edit()
    {
        $id = input();
        $cates = db('cate')->find($id); // 查找指定id的数据
        //dump($admins); die;
        if (request() -> isPost()) {
            // 获取输入数据
            $data = [
                'id' => input('id'),
                'catename' => input('catename'),
            ];

            // 调用验证器判断输入操作
            $validate = \think\Loader::validate('Cate');
            if(!$validate->scene('edit')->check($data)){
                $this -> error($validate -> getError());
                die;
            }

            // 更新数据库操作
            if (db('cate')->update($data)) {
                $this->success('修改栏目成功!', 'lst');
            } else {
                $this->error('修改栏目失败!');
            }
            return;
        }

        $this->assign('cates', $cates);
        return $this->fetch();
    }
}