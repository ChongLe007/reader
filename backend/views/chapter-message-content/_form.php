<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ChapterMessageContent */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="chapter-message-content-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'chapter_id')->textInput() ?>

    <?= $form->field($model, 'story_id')->textInput() ?>

    <?= $form->field($model, 'message_content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'create_time')->textInput() ?>

    <?= $form->field($model, 'last_modify_time')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
