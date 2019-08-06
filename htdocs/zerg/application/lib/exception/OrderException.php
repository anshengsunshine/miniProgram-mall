<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/19/019
 * Time: 11:14
 */

namespace app\lib\exception;


class OrderException extends BaseException
{
    public $code = 404;
    public $msg = '订单不存在，请检查ID';
    public $errorCode = 80000;
}