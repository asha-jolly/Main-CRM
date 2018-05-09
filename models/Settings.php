<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "settings".
 *
 * @property int $id
 * @property string $company_name
 * @property string $address
 * @property string $email
 * @property int $contact_number
 */
class Settings extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['company_name', 'address', 'email', 'contact_number'], 'required'],
            [['contact_number'], 'integer'],
            [['company_name', 'address', 'email'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'company_name' => 'Company Name',
            'address' => 'Address',
            'email' => 'Email',
            'contact_number' => 'Contact Number',
        ];
    }
}
