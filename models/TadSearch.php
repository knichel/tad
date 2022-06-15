<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Tad;

/**
 * TadSearch represents the model behind the search form of `app\models\Tad`.
 */
class TadSearch extends Tad
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tad_id', 'schoolYear_id', 'program_id', 'student_id', 'teacher_id', 'written_id', 'practical_id'], 'integer'],
            [['written_score', 'practical_score', 'portfolio_score'], 'safe'],
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
        $query = Tad::find();

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
            'tad_id' => $this->tad_id,
            'schoolYear_id' => $this->schoolYear_id,
            'program_id' => $this->program_id,
            'student_id' => $this->student_id,
            'teacher_id' => $this->teacher_id,
            'written_id' => $this->written_id,
            'practical_id' => $this->practical_id,
        ]);

        $query->andFilterWhere(['like', 'written_score', $this->written_score])
            ->andFilterWhere(['like', 'practical_score', $this->practical_score])
            ->andFilterWhere(['like', 'portfolio_score', $this->portfolio_score]);

        return $dataProvider;
    }
}
