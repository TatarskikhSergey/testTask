<?php

namespace frontend\controllers;

use common\models\Article;

class ArticleController extends \yii\web\Controller
{
    public function actionIndex($id)
    {
        $article = Article::findOne($id);
        return $this->render('index', ['article' => $article]);
    }

}
