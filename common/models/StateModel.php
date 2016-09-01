<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "state".
 *
 * @property integer $idState
 * @property integer $idCountry
 * @property string $alias
 * @property string $nameRu
 */
class StateModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'state';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['alias', 'nameRu'], 'required'],
            [['idCountry'], 'integer'],
            [['alias', 'nameRu'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idState' => 'Id State',
            'idCountry' => 'Id Country',
            'alias' => 'Alias',
            'nameRu' => 'Name Ru',
        ];
    }
}
