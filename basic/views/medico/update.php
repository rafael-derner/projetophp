<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Medico */

$this->title = 'Editando: ' . $model->medico_nome;
/*$this->params['breadcrumbs'][] = ['label' => 'Médicos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->medico_nome, 'url' => ['view', 'id' => $model->medico_id]];
$this->params['breadcrumbs'][] = 'Editar';*/
?>
<div class="medico-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
