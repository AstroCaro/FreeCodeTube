<?php

/** @var yii\web\View $this */
/** @var string $content */

use backend\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);
$this->beginContent('@backend/views/layouts/base.php')
?>
    <main role="main" class="flex-shrink-0 d-flex">
        <div class="container">
            <?= $content ?>
        </div>
    </main>

<?php $this->endContent()?>