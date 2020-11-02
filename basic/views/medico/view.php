<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\Especialidade;
use app\controllers\MedicoController;
use app\models\MedicoSearch;

/* @var $this yii\web\View */
/* @var $model app\models\Medico */

$searchModel = new MedicoSearch;

$this->title = $model->medico_nome;
$this->params['breadcrumbs'][] = ['label' => 'Médicos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="medico-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Editar', ['update', 'id' => $model->medico_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Excluir', ['delete', 'id' => $model->medico_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Deseja realmente excluir este item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
            //'medico_id',
            'medico_nome',
            'medico_sexo',
            'medico_crm',
            'medico_cpf',
            'medico_email:email',
            'especialidade.especialidade_descricao'
            
        ],
    ]);
    ?>

</div>
