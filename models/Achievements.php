<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "achievements".
 *
 * @property integer $id
 * @property string $title
 * @property string $imgeFile
 */
class Achievements extends \yii\db\ActiveRecord
{
    public $file;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'achievements';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'imgeFile'], 'required'],
            [['title'], 'string', 'max' => 250],
            [['imgeFile'], 'string', 'max' => 25]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Название',
            'imgeFile' => 'Imge File',
        ];
    }
}
