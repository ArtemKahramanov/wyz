<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Worker;

/**
 * WorkerSearch represents the model behind the search form of `app\models\Worker`.
 */
class WorkerSearch extends Worker
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'inn', 'employment_history_id', 'cafedra_id', 'pension_certificate_number', 'holiday_id', 'contract_id', 'position_id'], 'integer'],
            [['fio', 'passport_data', 'rank', 'start_working_date'], 'safe'],
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
        $query = Worker::find();

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
            'id' => $this->id,
            'inn' => $this->inn,
            'employment_history_id' => $this->employment_history_id,
            'cafedra_id' => $this->cafedra_id,
            'pension_certificate_number' => $this->pension_certificate_number,
            'holiday_id' => $this->holiday_id,
            'contract_id' => $this->contract_id,
            'start_working_date' => $this->start_working_date,
            'position_id' => $this->position_id,
        ]);

        $query->andFilterWhere(['like', 'fio', $this->fio])
            ->andFilterWhere(['like', 'passport_data', $this->passport_data])
            ->andFilterWhere(['like', 'rank', $this->rank]);

        return $dataProvider;
    }
}
