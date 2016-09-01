<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\CityModel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="city-model-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idCountry')->textInput() ?>

    <?= $form->field($model, 'idState')->textInput() ?>

    <?= $form->field($model, 'idArea')->textInput() ?>

    <?= $form->field($model, 'nameRu')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
