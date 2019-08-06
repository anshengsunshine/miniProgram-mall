<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/9/009
 * Time: 8:16
 */

namespace app\lib\exception;


class CategoryException extends BaseException
{
    public $code = 404;
    public $msg = '制定的类目不存在，请检查参数';
    public $errorCode = 50000;
}