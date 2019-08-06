<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/15/015
 * Time: 17:54
 */

namespace app\api\model;


class ProductProperty extends BaseModel
{
    protected $hidden = ['product_id','delete_time','id'];
}