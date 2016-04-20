<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "worker".
 *
 * @property integer $id
 * @property string $imgeFile
 * @property string $fio
 * @property string $phone
 * @property string $email
 */
class Worker extends \yii\db\ActiveRecord
{
    public $file;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'worker';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['imgeFile', 'fio', 'phone', 'email'], 'required'],
            [['imgeFile'], 'string', 'max' => 50],
            [['fio', 'email'], 'string', 'max' => 100],
            [['phone'], 'string', 'max' => 25]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'imgeFile' => 'Фото',
            'fio' => 'Ф.И.О.',
            'phone' => 'Телефон',
            'email' => 'E-mail',
            'file' => 'Фото',
        ];
    }
}
