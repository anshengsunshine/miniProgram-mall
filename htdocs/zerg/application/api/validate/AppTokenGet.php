<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/11 0011
 * Time: 14:29
 */

namespace app\api\validate;


class AppTokenGet extends BaseValidate
{
    protected $rule = [
      'ac' => 'require|isNotEmpty',
      'se' => 'require|isNotEmpty'
    ];
}