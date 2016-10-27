<?php

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Create Event';
?>

<div class="event-create">
    <h1 class="main-title"><?= $this->title ?></h1>

    <div class="form">
        <?= $this->render('_partial/form', [
            'model' => $model
        ]) ?>
    </div>
</div>