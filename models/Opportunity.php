<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "opportunity".
 *
 * @property int $id
 * @property string $oppor_name
 * @property int $lead_id
 * @property string $status
 *
 * @property Contact[] $contacts
 * @property Lead $lead
 */
class Opportunity extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'opportunity';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['oppor_name', 'lead_id', 'status'], 'required'],
            [['lead_id'], 'integer'],
            [['oppor_name', 'status'], 'string', 'max' => 50],
            [['lead_id'], 'exist', 'skipOnError' => true, 'targetClass' => Lead::className(), 'targetAttribute' => ['lead_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'oppor_name' => 'Opportunity Name',
            'lead_id' => 'Lead Owner',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getContacts()
    {
        return $this->hasMany(Contact::className(), ['opportunity_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLead()
    {
        return $this->hasOne(Lead::className(), ['id' => 'lead_id']);
    }
}
