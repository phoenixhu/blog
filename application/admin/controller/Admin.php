<?php

namespace app\admin\controller;

use think\Controller;
use think\Db;
use app\admin\model\Admin as AdminModel;

class Admin extends Controller
{
    /*管理员列表*/
    public function lst()
    {
        $list = AdminModel::paginate(3);
        $this->assign('list', $list); // 模板变量赋值
        return $this->fetch('list');
    }

    /*添加管理员*/
    public function add()
    {
        if (request()->isPost()) {

            // 获取表单输入数据input()
            $data = [
                'username' => input('username'),
                'password' => input('password'),
            ];

            // 调用验证器判断输入操作
            $validate = \think\Loader::validate('Admin');
            if(!$validate->scene('add')->check($data)){
                $this -> error($validate -> getError());
                die;
            }

            // 添加操作
            if (Db::name('admin')->insert($data)) {
                return $this->success('添加管理员成功!', 'lst');
            } else {
                return $this->error('添加管理员失败!');
            }
            return;
        }
        return $this->fetch('add');
    }

    /*删除管理员*/
    public function del()
    {
        $id = input('id');
        if ($id != 2) {
            if (db('admin')->delete(input('id'))){
                $this->success('删除管理员成功!', 'lst');
            } else {
                $this->error('删除管理员失败!');
            }
        } else {
            $this->error('初始化管理员不能删除!');

        }

    }

    /*编辑管理员*/
    public function edit()
    {
        $id = input();
        $admins = db('admin')->find($id); // 查找指定id的数据
        //dump($admins); die;
        if (request() -> isPost()) {
            // 获取输入数据
            $data = [
                'id' => input('id'),
                'username' => input('username'),
            ];
            if (input('password')) {
                $data['password'] = md5(input('password'));
            } else {
                // 如果password为空则设置为原先密码
                $data['password'] = $admins['password'];
            }

            // 调用验证器判断输入操作
            $validate = \think\Loader::validate('Admin');
            if(!$validate->scene('edit')->check($data)){
                $this -> error($validate -> getError());
                die;
            }

            // 更新数据库操作
            if (db('admin')->update($data)) {
                $this->success('修改管理员成功!', 'lst');
            } else {
                $this->error('修改管理员失败!');
            }
            return;
        }

        $this->assign('admins', $admins);
        return $this->fetch();
    }
}
