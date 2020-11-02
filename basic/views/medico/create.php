<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Medico */

$this->title = 'Novo Médico';
//$this->params['breadcrumbs'][] = ['label' => 'Médicos', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="medico-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
