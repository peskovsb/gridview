<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\StateSearchModel */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'State Models';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="state-model-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create State Model', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idState',
            //'idCountry',
            'alias',
            'nameRu',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
