<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Usuarios';
//$this->params['breadcrumbs'][] = $this->title
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear Usuario', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <div class="panel panel-info col-xs-5">
        <div class="panel-heading">
            <h3 class="panel-title">Info Rol</h3>
        </div>
        <div class="panel-body">
            <ul class="list-group">
                <li class="list-group-item">1 - Administrador</li>
                <li class="list-group-item">2 - Usuario Registrado</li>
                <li class="list-group-item">3 - Organizador</li>
            </ul>
        </div>
    </div>
    <div class="panel panel-info col-xs-5 col-xs-offset-2">
        <div class="panel-heading">
            <h3 class="panel-title">Info Estado</h3>
        </div>
        <div class="panel-body">
            <ul class="list-group">
                <li class="list-group-item">0 - Borrado</li>
                <li class="list-group-item">9 - Inactivo</li>
                <li class="list-group-item">10 - Activo</li>
            </ul>
        </div>
    </div>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'username',
            //'auth_key',
            //'password_hash',
            //'password_reset_token',
            'email:email',
            'status',
            //'created_at',
            //'updated_at',
            //'verification_token',
            'role',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>



</div>