<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/16 0016
 * Time: 12:38
 */

namespace app\api\validate;


class AddressNew extends BaseValidate
{
    protected $rule = [
        'name' =>  'require|isNotEmpty',
        'mobile' => 'require',
        'province' => 'require|isNotEmpty',
        'city' => 'require|isNotEmpty',
        'country' => 'require|isNotEmpty',
        'detail' => 'require|isNotEmpty',
    ];
}