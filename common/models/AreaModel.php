<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "area".
 *
 * @property integer $idArea
 * @property integer $idCountry
 * @property integer $idState
 * @property string $nameRu
 */
class AreaModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'area';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idState','nameRu'], 'required'],
            [['idState'], 'integer'],
            [['nameRu'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idArea' => 'Id Area',
            'idCountry' => 'Id Country',
            'idState' => 'Id State',
            'nameRu' => 'Name Ru',
        ];
    }
    
    
     /**
     * @inheritdoc
     */
    public function getIdStateFilter()
    {
        return $this->hasOne(StateModel::Classname(), ['idState'=>'idState']);
    }
    
    
    
}
