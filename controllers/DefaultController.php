<?php

namespace app\controllers;

class DefaultController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $request = \Yii::$app->request;

        if($request->isPost){
            $nome = $request->post('nome');
            $cidade = $request->post('cidade');

            return $this->render('mostrar-dados', [
                'nome' => $nome,
                'cidade' => $cidade
            ]);

        }

        return $this->render('index');
    }

}
