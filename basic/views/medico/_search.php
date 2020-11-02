<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MedicoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="medico-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'medico_id') ?>

    <?= $form->field($model, 'medico_nome') ?>

    <?= $form->field($model, 'medico_sexo') ?>

    <?= $form->field($model, 'medico_crm') ?>

    <?= $form->field($model, 'medico_cpf') ?>

    <?php // echo $form->field($model, 'medico_email') ?>

    <?php // echo $form->field($model, 'especialidade_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
