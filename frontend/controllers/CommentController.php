<?php
/**
 * Created by PhpStorm.
 * User: HP ELITEBOOK 840 G5
 * Date: 1/29/2020
 * Time: 2:19 PM
 */

namespace frontend\controllers;


use frontend\resource\Comment;
use yii\data\ActiveDataProvider;


class CommentController extends ActiveController
{
    public $modelClass = Comment::class;




    public function actions()
    {
        $actions = parent::actions();

        //redefine the prepareDataProvider variable of index action in ActiveController  class

        $actions['index']['prepareDataProvider'] = [$this, 'prepareDataProviderCB'];

        return $actions;

    }

    //DEFINE our callback

    public function prepareDataProviderCB(){
        return new ActiveDataProvider([
            'query' => $this->modelClass::find()->andWhere(['post_id' => \Yii::$app->request->get('postId')])
        ]);
    }





}