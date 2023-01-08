<?php

/** @var \yii\web\View $this */

/** @var string $content */

use backend\assets\AppAsset;
use common\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>" class="h-100">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>


<!--    <body">-->
    <?php $this->beginBody() ?>

    <div class="wrap h-100 d-flex flex-column">
        <?php echo $this->render('_header'); ?>

        <main role="main" class="flex-shrink-0 d-flex">
            <?php echo $this->render('_sidebar'); ?>

            <div class="content-wrapper p-3">
                <!--        --><?php //= Breadcrumbs::widget([
                //            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                //        ]) ?>
                <?= Alert::widget() ?>
                <?= $content ?>
            </div>
        </main>
    </div>

    <?php $this->endBody() ?>
<!--    </body>-->
    </html>
<?php $this->endPage();
