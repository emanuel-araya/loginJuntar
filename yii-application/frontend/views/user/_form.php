<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true])->label('Nombre de Usuario') ?>

    <!--<?= $form->field($model, 'auth_key')->textInput(['maxlength' => true]) ?>-->

    <?= $form->field($model, 'password_hash')->textInput(['maxlength' => true])->label('Contraseña') ?>

    <!--<?= $form->field($model, 'password_reset_token')->textInput(['maxlength' => true]) ?>-->

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <!--<?= $form->field($model, 'status')->textInput()->label('Estado') ?>-->

    <!--<?= $form->field($model, 'created_at')->textInput() ?>-->

    <!--<?= $form->field($model, 'updated_at')->textInput() ?>-->

    <!--<?= $form->field($model, 'verification_token')->textInput(['maxlength' => true]) ?>-->

    <!--<?= $form->field($model, 'role')->textInput() ?>-->

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
