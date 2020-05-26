<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use common\models\User;


AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body>
    <?php $this->beginBody() ?>

    <div class="wrap">
        <?php

        $menuItems = [];
        if (Yii::$app->user->isGuest) {
            NavBar::begin([
                'brandLabel' => 'JUNTAR',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
            $menuItems[] = ['label' => 'Home', 'url' => ['/site/index']];
            $menuItems[] = ['label' => 'Acerca', 'url' => ['/site/about']];
            $menuItems[] = ['label' => 'Registrarse', 'url' => ['/site/signup']];
            $menuItems[] = ['label' => 'Iniciar Sesion', 'url' => ['/site/login']];
        } else {
            if (User::isUserAdmin(Yii::$app->user->identity->username)) {

                NavBar::begin([
                    'brandLabel' => 'ADMINISTRADOR',
                    'brandUrl' => Yii::$app->homeUrl . '?r=site/admin',
                    'options' => [
                        'class' => 'navbar-inverse navbar-fixed-top',
                    ],
                ]);

                $menuItems[] = ['label' => 'Home', 'url' => ['/site/admin']];
                $menuItems[] = ['label' => 'Gestion Usuarios', 'url' => ['/user/index']];
                $menuItems[] = ['label' => 'Gestion Roles', 'url' => ['/rol/index']];
            } elseif (User::isUserSimple(Yii::$app->user->identity->username)) {

                NavBar::begin([
                    'brandLabel' => 'USUARIO REGISTRADO',
                    'brandUrl' => Yii::$app->homeUrl . '?r=site/user',
                    'options' => [
                        'class' => 'navbar-inverse navbar-fixed-top',
                    ],
                ]);
                $menuItems[] = ['label' => 'Home', 'url' => ['/site/user']];
                $menuItems[] = ['label' => 'Acerca', 'url' => ['/site/about']];
                $menuItems[] = ['label' => 'Contacto', 'url' => ['/site/contact']];
                
                
            } elseif (User::isUserOrganizador(Yii::$app->user->identity->username)) {

                NavBar::begin([
                    'brandLabel' => 'ORGANIZADOR',
                    'brandUrl' => Yii::$app->homeUrl . '?r=site/organizador',
                    'options' => [
                        'class' => 'navbar-inverse navbar-fixed-top',
                    ],
                ]);
                $menuItems[] = ['label' => 'Home', 'url' => ['/site/organizador']];
                $menuItems[] = ['label' => 'Acerca', 'url' => ['/site/about']];
                $menuItems[] = ['label' => 'Contacto', 'url' => ['/site/contact']];
            }


            $menuItems[] = '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Salir (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>';
        }
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav navbar-right'],
            'items' => $menuItems,
        ]);
        NavBar::end();
        ?>

        <div class="container">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <p class="pull-left"><?= Html::encode('Programacion Web Avanzada') ?> <?= date('Y') ?></p>

            <p class="pull-right"><?= Html::encode('Emanuel Araya - Mauro Saracini') ?></p>
        </div>
    </footer>

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>