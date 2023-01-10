<?php

/** @var \yii\web\View $this */

/** @var string $content */

use backend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
$this->beginContent('@backend/views/layouts/base.php')
?>
    <main role="main" class="flex-shrink-0 d-flex">
        <?php echo $this->render('_sidebar'); ?>

        <div class="content-wrapper p-3 container-fluid">
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </main>

<?php $this->endContent() ?>