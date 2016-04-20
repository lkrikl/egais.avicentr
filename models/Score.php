<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "score".
 *
 * @property integer $id
 * @property string $name
 * @property string $phone
 * @property string $email
 * @property string $scanner
 * @property string $fr
 * @property string $tcd
 * @property string $date
 * @property string $status
 * @property string $order
 */
class Score extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'score';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'phone', 'email', 'scanner', 'fr', 'tcd', 'date', 'status', 'order'], 'required'],
            [['order'], 'string'],
            [['name'], 'string', 'max' => 250],
            [['phone', 'email'], 'string', 'max' => 100],
            [['scanner', 'fr', 'tcd'], 'string', 'max' => 500],
            [['date', 'status'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'phone' => 'Phone',
            'email' => 'Email',
            'scanner' => 'Scanner',
            'fr' => 'Fr',
            'tcd' => 'Tcd',
            'date' => 'Date',
            'status' => 'Status',
            'order' => 'Order',
        ];
    }
}
