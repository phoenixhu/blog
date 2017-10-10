<?php
namespace app\admin\validate;
use think\Validate;

class Tags extends Validate
{
    // 验证字段
    protected $rule = [
        'tagname'  =>  'require|max:25|unique:tags',
    ];

    // 验证信息
    protected $message  =   [
        'tagname.require' => 'Tag标签必须填写',
        'tagname.max' => 'Tag标签长度不得大于25位',
        'tagname.unique' => 'Tag标签不能重复',
    ];

    // 验证场景
    protected $scene = [
        'add'  =>  ['tagname'],
        'edit'  =>  ['tagname'],
    ];
}