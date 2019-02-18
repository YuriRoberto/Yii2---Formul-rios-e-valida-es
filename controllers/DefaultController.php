<?php

namespace app\controllers;

use app\models\forms\ProdutoForm;
use yii\helpers\VarDumper;
use yii\web\Response;
use yii\widgets\ActiveForm;

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

    public function actionProduto(){

        $form = new ProdutoForm();
        
        return $this->render('produto', [
            'model' => $form
        ]);

    }

}
