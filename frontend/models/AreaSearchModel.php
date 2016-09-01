<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\AreaModel;

/**
 * AreaSearchModel represents the model behind the search form about `common\models\AreaModel`.
 */
class AreaSearchModel extends AreaModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idArea', 'idCountry', 'idState'], 'integer'],
            [['nameRu'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = AreaModel::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'idArea' => $this->idArea,
            'idCountry' => $this->idCountry,
            'idState' => $this->idState,
        ]);

        $query->andFilterWhere(['like', 'nameRu', $this->nameRu]);

        return $dataProvider;
    }
}
