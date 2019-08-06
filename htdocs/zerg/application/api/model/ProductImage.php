<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/15/015
 * Time: 17:51
 */

namespace app\api\model;


class ProductImage extends BaseModel
{
    protected $hidden = ['img_id','delete_time','product_id'];

    public function imgUrl(){
        return $this->belongsTo('Image','img_id','id');
    }
}