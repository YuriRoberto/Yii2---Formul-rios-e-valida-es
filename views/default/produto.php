<?php 

use \yii\helpers\Html;

?>
<h1>Criando form com Model Form</h1>


<?php echo Html::beginForm()?>

<?php echo Html::activeLabel($model, 'nome');?>
<?php echo Html::activeInput('text', $model, 'nome', ['class' => 'form-control'])?>

<?php echo Html::activeLabel($model, 'preco');?>
<?php echo Html::activeInput('text', $model, 'preco', ['class' => 'form-control'])?>

<?php echo Html::activeLabel($model, 'decricao');?>
<?php echo Html::activeTextarea($model, 'descricao', ['class' => 'form-control', 'rows' => 10 ]);?>

<?php echo Html::activeCheckbox($model, 'status');?>

<hr>
<?php echo \yii\helpers\Html::button('Enviar', ['type' => 'submit', 'class' => 'btn btn-primary']) ?>

<?php echo Html::endForm()?>

