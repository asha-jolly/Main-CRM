<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "deal_history".
 *
 * @property int $id
 * @property int $deal_name
 *
 * @property Deal $dealName
 */
class DealHistory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'deal_history';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['deal_name'], 'required'],
            [['deal_name'], 'integer'],
            [['deal_name'], 'exist', 'skipOnError' => true, 'targetClass' => Deal::className(), 'targetAttribute' => ['deal_name' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'deal_name' => 'Deal Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDealName()
    {
        return $this->hasOne(Deal::className(), ['id' => 'deal_name']);
    }
}
