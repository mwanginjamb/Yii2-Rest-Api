<?php

/**
 * Created by PhpStorm.
 * User: HP ELITEBOOK 840 G5
 * Date: 1/29/2020
 * Time: 2:21 PM
 */

namespace frontend\resource;

class Comment extends \common\models\comment
{
    public function fields()
    {
        return ['id','title','body','post_id'];
    }

    public function extraFields()
    {
        return ['post','created_at'];
    }

    //Override the getPost method in common/model/comments class in order to return fields desired from the resource/posts/fields method here
    public function getPost()
    {
        return $this->hasOne(Post::class, ['id' => 'post_id']);
    }
}