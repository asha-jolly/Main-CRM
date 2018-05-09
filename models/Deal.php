<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "deal".
 *
 * @property int $id
 * @property int $opportunity_id
 * @property string $deal_name
 * @property int $deal_amount
 * @property string $deal_closingdate
 * @property string $deal_probability
 * @property string $start_date
 * @property string $end_date
 *
 * @property Opportunity $opportunity
 * @property DealHistory[] $dealHistories
 */
class Deal extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'deal';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['opportunity_id', 'deal_name', 'deal_amount', 'deal_closingdate', 'deal_probability', 'start_date', 'end_date'], 'required'],
            [['opportunity_id', 'deal_amount'], 'integer'],
            [['deal_closingdate', 'start_date', 'end_date'], 'safe'],
            [['deal_name', 'deal_probability'], 'string', 'max' => 50],
            [['opportunity_id'], 'exist', 'skipOnError' => true, 'targetClass' => Opportunity::className(), 'targetAttribute' => ['opportunity_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'opportunity_id' => 'Opportunity Name',
            'deal_name' => 'Deal Name',
            'deal_amount' => 'Deal Amount',
            'deal_closingdate' => 'Closing Date',
            'deal_probability' => 'Probability(%)',
            'start_date' => 'Start Date',
            'end_date' => 'End Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOpportunity()
    {
        return $this->hasOne(Opportunity::className(), ['id' => 'opportunity_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDealHistories()
    {
        return $this->hasMany(DealHistory::className(), ['deal_name' => 'id']);
    }
}
