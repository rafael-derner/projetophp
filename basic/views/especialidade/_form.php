<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Especialidade */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="especialidade-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'especialidade_sigla')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'especialidade_descricao')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Salvar', ['class' => 'btn btn-success']) ?>
        <?= Html::a('Voltar', ['index'],['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
