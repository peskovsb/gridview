<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\CitySearchModel */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'City Models';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="city-model-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create City Model', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idCity',
            'idCountry',
            'idState',
	    [
		'attribute' => 'idArea',
		'value' => 'idAreaFilter.nameRu',
		//'filter' => $arrState
	    ],
            'nameRu',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
