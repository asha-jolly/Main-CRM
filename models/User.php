<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $firstname
 * @property string $lastname
 * @property string $gender
 * @property string $dob
 * @property string $address
 * @property int $phonenumber
 * @property int $user_role_id
 * @property string $auth_key
 * @property string $username
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property int $status
 * @property string $created_at
 * @property string $updated_at
 * @property string $profile_image
 *
 * @property UserRole $userRole
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['firstname', 'lastname', 'gender', 'dob', 'address', 'phonenumber', 'auth_key', 'username', 'password_hash', 'email'], 'required'],
            [['dob', 'created_at', 'updated_at'], 'safe'],
            [['phonenumber', 'user_role_id', 'status'], 'integer'],
            [['firstname', 'password_hash', 'password_reset_token', 'email'], 'string', 'max' => 255],
            [['lastname', 'gender', 'address', 'username'], 'string', 'max' => 50],
            [['auth_key'], 'string', 'max' => 32],
            [['profile_image'], 'string', 'max' => 250],
            [['firstname'], 'unique'],
            [['email'], 'unique'],
            [['password_reset_token'], 'unique'],
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
            'firstname' => 'First Name',
            'lastname' => 'Last Name',
            'gender' => 'Gender',
            'dob' => 'Date of Birth',
            'address' => 'Address',
            'phonenumber' => 'Phone Number',
            'user_role_id' => 'User Role',
            'auth_key' => 'Auth Key',
            'username' => 'User Name',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'email' => 'Email',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'profile_image' => 'Profile Image',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserRole()
    {
        return $this->hasOne(UserRole::className(), ['id' => 'user_role_id']);
    }
}
