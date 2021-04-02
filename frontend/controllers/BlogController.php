<?php

namespace frontend\controllers;

class BlogController extends \yii\web\Controller
{
    public function actionBlog()
    {
        return $this->render('blog');
    }

}
