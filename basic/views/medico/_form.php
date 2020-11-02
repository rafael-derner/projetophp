<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Especialidade;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Medico */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="medico-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'medico_nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'medico_sexo')->radioList(['F'=>'Feminino', 'M'=>'Masculino']) ?>

    <?= $form->field($model, 'medico_crm')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'medico_cpf')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'medico_email')->textInput() ?>

    <?php   
        $especialidades=Especialidade::find()->all();
        $listData=ArrayHelper::map($especialidades,'especialidade_id','especialidade_descricao');
        echo $form->field($model, 'especialidade_id')->dropDownList(
        $listData, ['prompt'=>'Selecione a especialidade']);
    ?>

    <div class="form-group">
        <?= Html::submitButton('Salvar', ['class' => 'btn btn-success']) ?>
        <?= Html::a('Voltar', ['index'],['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end();?>

</div>
