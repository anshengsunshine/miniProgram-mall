<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/8/008
 * Time: 14:09
 */

namespace app\api\validate;


class Count extends BaseValidate
{
    protected $rule = [
        'count' => 'isPositiveInteger|between:1,15'
    ];
}