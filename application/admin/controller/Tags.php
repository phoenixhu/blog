<?php

namespace app\admin\controller;

class Tags extends Base
{
    /*Tag标签列表*/
    public function lst() {
        $list = db('tags')->paginate(3);
        $this->assign('list', $list); // 模板变量赋值
        return $this->fetch('list');
    }

    /*添加Tag标签*/
    public function add()
    {
        if (request()->isPost()) {

            // 获取表单输入数据input()
            $data = [
                'tagname' => input('tagname'),
            ];

            // 调用验证器判断输入操作
            $validate = \think\Loader::validate('Tags');
            if(!$validate->scene('add')->check($data)){
                $this -> error($validate -> getError());
                die;
            }

            // 添加操作
            if (db('Tags')->insert($data)) {
                return $this->success('添加Tag标签成功!', 'lst');
            } else {
                return $this->error('添加Tag标签失败!');
            }
            return;
        }
        return $this->fetch('add');
    }

    /*删除Tag标签*/
    public function del()
    {
        if (db('tags')->delete(input('id'))){
            $this->success('删除Tag标签成功!', 'lst');
        } else {
            $this->error('删除Tag标签失败!');
        }

    }

    /*编辑Tag标签*/
    public function edit()
    {
        $id = input();
        $tags = db('tags')->find($id); // 查找指定id的数据
        //dump($Linkss); die;
        if (request() -> isPost()) {
            // 获取输入数据
            $data = [
                'id' => input('id'),
                'tagname' => input('tagname'),
            ];

            // 调用验证器判断输入操作
            $validate = \think\Loader::validate('tags');
            if(!$validate->scene('edit')->check($data)){
                $this -> error($validate -> getError());
                die;
            }

            // 更新数据库操作
            if (db('tags')->update($data)) {
                $this->success('修改Tag标签成功!', 'lst');
            } else {
                $this->error('修改Tag标签失败!');
            }
            return;
        }

        $this->assign('tags', $tags);
        return $this->fetch();
    }
}
