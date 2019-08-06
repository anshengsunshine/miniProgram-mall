<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/8 0008
 * Time: 14:36
 */

namespace app\lib\exception;


class ParameterException extends BaseException
{
    public $code = 400;
    public  $msg = '参数错误';
    public $errorCode = 10000;
}