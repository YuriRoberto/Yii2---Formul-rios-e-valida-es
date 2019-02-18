<?php

namespace app\models\forms;

class ProdutoForm extends \yii\base\Model {

    const PRODUTO_STATUS_ATIVO = true;
    const PRODUTO_STATUS_INATIVO = false;

    public $nome;
    public $descricao;
    public $preco;
    public $status;



}

