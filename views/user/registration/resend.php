<?php

/*
 * This file is part of the Dektrium project.
 *
 * (c) Dektrium project <http://github.com/dektrium>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/*
 * @var yii\web\View                    $this
 * @var dektrium\user\models\ResendForm $model
 */

$this->title = Yii::t('user', 'Request Confirmation Message');
?>
<div class="container-fluid">
    <div class="row">
    
        <div class="well container-main-title">
            <h1 class="main-title"><?= $this->title ?></h1>
        </div>

        <div class="login-form">
            <div class="card">
                <?php $form = ActiveForm::begin([
                    'id'                     => 'resend-form',
                    'enableAjaxValidation'   => true,
                    'enableClientValidation' => false,
                ]); ?>

                <?= $form->field($model, 'email', ['inputTemplate' => '<div class="form-line">{input}</div>'])->textInput(['autofocus' => true]) ?>

                <?= Html::submitButton(Yii::t('user', 'Continue'), ['class' => 'btn btn-primary btn-block waves-effect']) ?><br>

                <?php ActiveForm::end() ?>
                
            </div>
        </div>

    </div>
</div>

