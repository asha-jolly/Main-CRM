<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "contact".
 *
 * @property int $id
 * @property int $opportunity_id
 * @property string $contact_owner
 * @property string $contact_firstname
 * @property string $contact_lastname
 * @property string $contact_email
 * @property int $contact_mobile
 * @property string $contact_dept
 * @property string $contact_address
 * @property string $created_at
 * @property string $updated_at
 *
 * @property Opportunity $opportunity
 * @property Deal[] $deals
 */
class Contact extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'contact';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['opportunity_id', 'contact_owner', 'contact_firstname', 'contact_lastname', 'contact_email', 'contact_mobile', 'contact_dept', 'contact_address', 'created_at', 'updated_at'], 'required'],
            [['opportunity_id', 'contact_mobile'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['contact_owner', 'contact_firstname', 'contact_lastname', 'contact_email', 'contact_dept', 'contact_address'], 'string', 'max' => 50],
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
            'contact_owner' => 'Contact Owner',
            'contact_firstname' => 'First Name',
            'contact_lastname' => 'Last Name',
            'contact_email' => 'Email',
            'contact_mobile' => 'Mobile Number',
            'contact_dept' => 'Department',
            'contact_address' => 'Address',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
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
    public function getDeals()
    {
        return $this->hasMany(Deal::className(), ['contact_id' => 'id']);
    }
}
