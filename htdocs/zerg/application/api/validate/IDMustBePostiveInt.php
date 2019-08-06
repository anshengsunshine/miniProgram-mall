<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/2 0002
 * Time: 14:14
 */

namespace app\api\validate;

use think\Validate;

class IDMustBePostiveInt extends BaseValidate
{
    protected $rule = [
        'id' => 'require|isPositiveInteger',
    ];

    protected $message = [
        'id' => '必须是正整数'
    ];
}