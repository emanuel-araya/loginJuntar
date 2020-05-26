<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application-UsuarioSimple';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1><?= "Bienvenido ".Yii::$app->user->identity->username."!" ?></h1>

    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">

                <div class="thumbnail">
                    <div class="text-center" height="150px"><img width="200px" src="../eventImg/WhatsApp Image 2020-05-25 at 19.47.07.jpeg" alt="Evento1"></div>
                    <div class="caption">
                        <h3>Evento 1</h3>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a href="#" class="btn btn-default" role="button">Mas Informacion</a><a href="#" class="btn btn-info" role="button">Inscripcion</a></p>
                    </div>
                </div>

            </div>
            <div class="col-lg-4">

                <div class="thumbnail">
                    <div class="text-center" height="150px"><img width="200px" src="../eventImg/WhatsApp Image 2020-05-25 at 19.47.07.jpeg" alt="Evento2"></div>
                    <div class="caption">
                        <h3>Evento 2</h3>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a href="#" class="btn btn-default" role="button">Mas Informacion</a><a href="#" class="btn btn-info" role="button">Inscripcion</a></p>
                    </div>
                </div>

            </div>
            <div class="col-lg-4">

                <div class="thumbnail">
                    <div class="text-center" height="150px"><img width="200px" src="../eventImg/WhatsApp Image 2020-05-25 at 19.47.07.jpeg" alt="Evento3"></div>
                    <div class="caption">
                        <h3>Evento 3</h3>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a href="#" class="btn btn-default" role="button">Mas Informacion</a><a href="#" class="btn btn-info" role="button">Inscripcion</a></p>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>