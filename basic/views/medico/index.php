<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Medico;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MedicoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Médicos';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="medico-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Adicionar novo médico', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php //echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            //'medico_id',
            'medico_nome',
            'medico_sexo',
            'medico_crm',
            'medico_cpf',
            'medico_email:email',
            //'especialidade_id',
            [ 
                'attribute' => 'especialidade',
                'value' => 'especialidade.especialidade_descricao'
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>


</div>
