<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Users2programs;

/**
 * Users2programsSearch represents the model behind the search form of `app\models\Users2programs`.
 */
class Users2programsSearch extends Users2programs
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user2program_id', 'schoolYear_id', 'user_id', 'program_id'], 'integer'],
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
        $query = Users2programs::find();

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
            'user2program_id' => $this->user2program_id,
            'schoolYear_id' => $this->schoolYear_id,
            'user_id' => $this->user_id,
            'program_id' => $this->program_id,
        ]);

        return $dataProvider;
    }
}
