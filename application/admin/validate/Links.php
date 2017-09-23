<?php
namespace app\admin\validate;
use think\Validate;

class Links extends Validate
{
    // 验证字段
    protected $rule = [
        'title'  =>  'require|max:25',
        'url' =>  'require|url',
    ];

    // 验证信息
    protected $message  =   [
        'titile.require' => '链接标题必须填写',
        'titile.max' => '链接标题长度不得大于25位',
        'url.require' => '链接地址必须填写',
        'url.url' => '请输入合法的链接地址(例如:http://www.google.com)',
    ];

    // 验证场景
    protected $scene = [
        'add'  =>  ['title', 'url'],
        'edit'  =>  ['title', 'url'],
    ];
}