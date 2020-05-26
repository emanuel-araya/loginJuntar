<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application-UsuarioAdministrador';
?>
<div class="site-index">

    <div class="jumbotron">
    <h1><?= "Bienvenido ".Yii::$app->user->identity->username."!" ?></h1>
    </div>

    <div class="body-content">

        <div class="row">
        </div>

    </div>
</div>