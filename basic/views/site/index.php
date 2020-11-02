<?php

/* @var $this yii\web\View */

$this->title = 'Sistema de Cadastro';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Sistema de Cadastro</h1></br>
        <p><a class="btn btn-lg btn-success" href="http://provaphp.local/index.php?r=especialidade%2Findex">Especialidades</a></p>
        <p><a class="btn btn-lg btn-success" href="http://provaphp.local/index.php?r=medico%2Findex">Médicos</a></p>
    </div>


    <div class="body-content">

        <div class="row">
            <div class="col-lg-6">
                <h2>Passo 1:</h2>

                <p>Primeiramente é necessário fazer o cadastro de pelo menos uma especialidade. Clique no botão verde acima para visualizar as especialidades cadastradas ou no botão abaixo para realizar o cadastro de uma nova especialidade.</p>

                <p><a class="btn btn-default" href="http://provaphp.local/index.php?r=especialidade%2Fcreate">Cadastro de especialidade</a></p>
            </div>
            <div class="col-lg-6">
                <h2>Passo 2:</h2>

                <p>Após o cadastro de pelo menos uma especialidade já é possível fazer o cadastro de um médico. Clique no botão verde acima para visualizar os profissionais cadastrados ou no botão abaixo para cadastrar novos médicos.</p>

                <p><a class="btn btn-default" href="http://provaphp.local/index.php?r=medico%2Fcreate">Cadastro de médico</a></p>
            </div>
            </div>
        </div>

    </div>
</div>
