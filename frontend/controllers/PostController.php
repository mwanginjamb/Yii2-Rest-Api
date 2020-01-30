<?php
/**
 * Created by PhpStorm.
 * User: HP ELITEBOOK 840 G5
 * Date: 1/29/2020
 * Time: 10:20 AM
 */

namespace frontend\controllers;


use frontend\resource\Post;
use yii\filters\auth\HttpBearerAuth;
use yii\web\ForbiddenHttpException;

class PostController extends ActiveController
{
    public $modelClass = Post::class;

}