<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contacto';
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
    Si tiene consultas sobre el sitio u otras preguntas, complete el siguiente formulario para contactarnos. Gracias.
    </p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                <?= $form->field($model, 'name')->textInput(['autofocus' => true])->label('Nombre'); ?>

                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'subject')->label('Asunto'); ?>

                <?= $form->field($model, 'body')->textarea(['rows' => 6])->label('Mensaje'); ?>

                <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                ])->label('Codigo de Verificacion'); ?>

                <div class="form-group">
                    <?= Html::submitButton('Enviar', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>

</div>
