<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/2 0002
 * Time: 14:06
 */

namespace app\api\validate;

use think\Validate;

class TestValidate extends Validate
{
    protected $rule = [
        'name' => 'require|max:10',
        'email' => 'email'
    ];
}