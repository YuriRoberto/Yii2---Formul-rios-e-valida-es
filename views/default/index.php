<?php
/* @var $this yii\web\View */
use \yii\helpers\Html;
?>
<!--
<h1>default/index</h1>

<p>
    You may change the content of this page by modifying
    the file <code><?= __FILE__; ?></code>.
</p>
-->

<h1>Criando form com HTML Helper</h1>

<?php echo \yii\helpers\Html::beginForm() ?>

<?php echo \yii\helpers\Html::label('Nome', '') ?>
<?php echo \yii\helpers\Html::input('text', 'nome', "Yuri Roberto", [
    'class' => 'form-control'
]) ?>


<?php echo Html::label('Cidades', '')?>
<?php echo \yii\helpers\Html::dropDownList('cidade', '', [
    1 => "Juazeiro",
    2 => "Salvador",
    3 => "Camumu",
    4 => "itabuna"
], ['prompt' => "Selecione", 'class' => 'form-control']); ?>
<hr>

<?php echo \yii\helpers\Html::button('Enviar', ['type' => 'submit', 'class' => 'btn btn-primary']) ?>

<?php echo \yii\helpers\Html::endForm() ?>
