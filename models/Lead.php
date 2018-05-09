<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "lead".
 *
 * @property int $id
 * @property int $user_role_id
 * @property string $lead_owner
 * @property string $lead_company
 * @property string $lead_firstname
 * @property string $lead_lastname
 * @property string $lead_title
 * @property string $lead_email
 * @property int $lead_phone
 * @property int $lead_mobile
 * @property int $lead_employees
 * @property string $lead_address
 * @property string $created_at
 * @property string $updated_at
 *
 * @property UserRole $userRole
 * @property Opportunity[] $opportunities
 */
class Lead extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lead';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_role_id', 'lead_owner', 'lead_company', 'lead_firstname', 'lead_lastname', 'lead_title', 'lead_email', 'lead_phone', 'lead_mobile', 'lead_employees', 'lead_address'], 'required'],
            [['user_role_id', 'lead_phone', 'lead_mobile', 'lead_employees'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['lead_owner', 'lead_company', 'lead_firstname', 'lead_lastname', 'lead_title', 'lead_email', 'lead_address'], 'string', 'max' => 50],
            [['user_role_id'], 'exist', 'skipOnError' => true, 'targetClass' => UserRole::className(), 'targetAttribute' => ['user_role_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_role_id' => 'User Role',
            'lead_owner' => 'Lead Owner',
            'lead_company' => 'Company',
            'lead_firstname' => 'First Name',
            'lead_lastname' => 'Last Name',
            'lead_title' => 'Title',
            'lead_email' => 'Email',
            'lead_phone' => 'Phone Number',
            'lead_mobile' => 'Mobile Number',
            'lead_employees' => 'Employees',
            'lead_address' => 'Address',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserRole()
    {
        return $this->hasOne(UserRole::className(), ['id' => 'user_role_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOpportunities()
    {
        return $this->hasMany(Opportunity::className(), ['lead_id' => 'id']);
    }
}
