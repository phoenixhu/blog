<?php

namespace app\admin\controller;

class Logo extends Base
{
    /*Logo管理*/
    public function index() {
        if (request()->isPost()) {
            if ($_FILES['logo']['tmp_name']) {
                @unlink('../public/static/index/images/logo.png');
                request()->file('logo');
                if ($_FILES["logo"]["type"] != "image/png") {
                    $this->error('logo必须为png格式!');
                } else {
                    move_uploaded_file($_FILES['logo']['tmp_name'], '../public/static/index/images/logo.png');
                    $this->success('logo修改成功!', 'index');
                }


                //$info = $file->move(ROOT_PATH . 'public' . DS . 'static/index/images');
                //$data['logo'] = '/uploads/' . $info->getSaveName();

            }
        }
        return $this->fetch('index');
    }
}
