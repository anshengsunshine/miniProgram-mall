<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/8/008
 * Time: 14:20
 */

namespace app\lib\exception;


class ProductException extends BaseException
{
    public $code = 404;
    public $msg = '指定的商品不存在，请检查参数信息';
    public $errorCode = 20000;
}