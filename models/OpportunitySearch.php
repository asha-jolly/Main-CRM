<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Opportunity;

/**
 * OpportunitySearch represents the model behind the search form of `backend\models\Opportunity`.
 */
class OpportunitySearch extends Opportunity
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'lead_id'], 'integer'],
            [['oppor_name', 'status'], 'safe'],
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
        $query = Opportunity::find();

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
            'lead_id' => $this->lead_id,
        ]);

        $query->andFilterWhere(['like', 'oppor_name', $this->oppor_name])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
