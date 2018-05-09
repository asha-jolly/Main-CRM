<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Lead;

/**
 * LeadSearch represents the model behind the search form of `backend\models\Lead`.
 */
class LeadSearch extends Lead
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'user_role_id', 'lead_phone', 'lead_mobile', 'lead_employees'], 'integer'],
            [['lead_owner', 'lead_company', 'lead_firstname', 'lead_lastname', 'lead_title', 'lead_email', 'lead_address', 'created_at', 'updated_at'], 'safe'],
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
        $query = Lead::find();

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
            'user_role_id' => $this->user_role_id,
            'lead_phone' => $this->lead_phone,
            'lead_mobile' => $this->lead_mobile,
            'lead_employees' => $this->lead_employees,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'lead_owner', $this->lead_owner])
            ->andFilterWhere(['like', 'lead_company', $this->lead_company])
            ->andFilterWhere(['like', 'lead_firstname', $this->lead_firstname])
            ->andFilterWhere(['like', 'lead_lastname', $this->lead_lastname])
            ->andFilterWhere(['like', 'lead_title', $this->lead_title])
            ->andFilterWhere(['like', 'lead_email', $this->lead_email])
            ->andFilterWhere(['like', 'lead_address', $this->lead_address]);

        return $dataProvider;
    }
}
