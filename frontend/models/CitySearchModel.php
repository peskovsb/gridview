<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\CityModel;

/**
 * CitySearchModel represents the model behind the search form about `common\models\CityModel`.
 */
class CitySearchModel extends CityModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idCity', 'idCountry', 'idState'], 'integer'],
            [['nameRu', 'idArea'], 'safe'],
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
        $query = CityModel::find();

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
	$query->joinWith('idAreaFilter');

        // grid filtering conditions
        $query->andFilterWhere([
            'city.idCity' => $this->idCity,
            //'idCountry' => $this->idCountry,
            //'city.idState' => $this->idState,
            //'idArea' => $this->idArea,
        ]);

        $query->andFilterWhere(['like', 'city.nameRu', $this->nameRu])
        ->andFilterWhere(['like', 'area.nameRu', $this->idArea]);

        return $dataProvider;
    }
}
