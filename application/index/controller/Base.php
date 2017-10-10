<?php

namespace app\index\controller;

use think\Controller;
use think\Db;
class Base extends Controller
{
    public function _initialize()
    {
        $cateres = Db::name('cate')->order('id asc')->select();
        $tagres = Db::name('tags')->order('id desc')->select();
        $this->assign(array(
            'cateres'=>$cateres,
            'tagres'=>$tagres
        ));
        $this->right();
    }

    public function right()
    {
        //热门点击
        $clickres = db('article')->order('click desc')->limit(8)->select();
        //推荐阅读
        $tjres = db('article')->where('state', '=', 1)->order('click desc')->limit(8)->select();
        $this->assign(array(
            'clickres'=>$clickres,
            'tjres'=>$tjres
        ));
    }

}
