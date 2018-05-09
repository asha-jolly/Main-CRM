<?php

namespace backend\models;
use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Deal;

/**
 * DealSearch represents the model behind the search form of `backend\models\Deal`.
 */
class DealSearch extends Deal
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'opportunity_id', 'deal_amount'], 'integer'],
            [['deal_name', 'deal_closingdate', 'deal_probability', 'start_date', 'end_date'], 'safe'],
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
        $query = Deal::find();

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
            'opportunity_id' => $this->opportunity_id,
            'deal_amount' => $this->deal_amount,
            'deal_closingdate' => $this->deal_closingdate,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
        ]);

        $query->andFilterWhere(['like', 'deal_name', $this->deal_name])
            ->andFilterWhere(['like', 'deal_probability', $this->deal_probability]);

        return $dataProvider;
    }
	public function historysearch($params)
    {
        $query = Deal::find();

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
            'deal_name' => $this->deal_name,
        ]);

        return $dataProvider;
    }

}
