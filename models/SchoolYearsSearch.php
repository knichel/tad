<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SchoolYears;

/**
 * SchoolYearsSearch represents the model behind the search form of `app\models\SchoolYears`.
 */
class SchoolYearsSearch extends SchoolYears
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['schoolYear_id'], 'integer'],
            [['description', 'isCurrent'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = SchoolYears::find();

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
            'schoolYear_id' => $this->schoolYear_id,
        ]);

        $query->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'isCurrent', $this->isCurrent]);

        return $dataProvider;
    }
}
