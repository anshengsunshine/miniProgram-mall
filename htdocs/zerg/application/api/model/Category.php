<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/9/009
 * Time: 8:07
 */

namespace app\api\model;


class Category extends BaseModel
{
    protected $hidden = ['delete_time','update_time','create_time'];

    public function img(){
        return $this->belongsTo('Image','topic_img_id','id');
    }
}