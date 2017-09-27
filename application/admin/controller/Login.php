<?php

namespace app\admin\controller;
use think\Controller;
use app\admin\model\Admin;
class Login extends Controller
{
    public function index()
    {
        if (request()->isPost()) {
            $admin = new Admin();
            $data = input('post.');
            $num = $admin->login($data);
            if ( $num == 1) {
                $this->success('您已成功登录!', 'Index/index');
            } elseif ($num == 2) {
                $this->error('验证码错误');
            }else{
                $this->error('用户名或者密码错误');
            }
        }
        return $this->fetch('login');
    }

}
