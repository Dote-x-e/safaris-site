<?php

namespace frontend\controllers;

class ContactController extends \yii\web\Controller
{
    public function actionContact()
    {
        return $this->render('contact');
    }

}
