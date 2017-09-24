<?php
namespace app\admin\validate;
use think\Validate;

class Cate extends Validate
{
    // 验证字段
    protected $rule = [
        'catename'  =>  'require|max:10|unique:cate',
    ];

    // 验证信息
    protected $message  =   [
        'catename.require' => '栏目名称必须填写',
        'catename.max' => '栏目名称长度不得大于10位',
        'catename.unique' => '栏目名称已存在',
    ];

    // 验证场景
    protected $scene = [
        'add'  =>  ['catename'],
        'edit'  =>  ['catename'],
    ];
}