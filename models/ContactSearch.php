<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Contact;

/**
 * ContactSearch represents the model behind the search form of `backend\models\Contact`.
 */
class ContactSearch extends Contact
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'opportunity_id', 'contact_mobile'], 'integer'],
            [['contact_owner', 'contact_firstname', 'contact_lastname', 'contact_email', 'contact_dept', 'contact_address', 'created_at', 'updated_at'], 'safe'],
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
        $query = Contact::find();

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
            'contact_mobile' => $this->contact_mobile,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'contact_owner', $this->contact_owner])
            ->andFilterWhere(['like', 'contact_firstname', $this->contact_firstname])
            ->andFilterWhere(['like', 'contact_lastname', $this->contact_lastname])
            ->andFilterWhere(['like', 'contact_email', $this->contact_email])
            ->andFilterWhere(['like', 'contact_dept', $this->contact_dept])
            ->andFilterWhere(['like', 'contact_address', $this->contact_address]);

        return $dataProvider;
    }
}
