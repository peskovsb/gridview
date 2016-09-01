<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "city".
 *
 * @property integer $idCity
 * @property integer $idCountry
 * @property integer $idState
 * @property integer $idArea
 * @property string $nameRu
 */
class CityModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'city';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idCountry', 'idState', 'idArea', 'nameRu'], 'required'],
            [['idCountry', 'idState', 'idArea'], 'integer'],
            [['nameRu'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idCity' => 'Id City',
            'idCountry' => 'Id Country',
            'idState' => 'Id State',
            'idArea' => 'Id Area',
            'nameRu' => 'Name Ru',
        ];
    }
     /**
     * @inheritdoc
     */
    public function getIdAreaFilter()
    {
        return $this->hasOne(AreaModel::Classname(), ['idArea'=>'idArea']);
    }    
}
