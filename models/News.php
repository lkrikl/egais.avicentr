<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property integer $id
 * @property string $title
 * @property string $imgeFile
 * @property string $anons
 * @property string $content
 * @property string $date
 */
class News extends \yii\db\ActiveRecord
{

    public $file;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'anons', 'content', 'date'], 'required'],
            [['anons', 'content'], 'string'],
            [['title'], 'string', 'max' => 500],
            [['imgeFile'], 'string', 'max' => 50],
            [['date'], 'string', 'max' => 25]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Заголовок',
            'imgeFile' => 'Imge File',
            'anons' => 'Краткое описание',
            'content' => 'Контент',
            'date' => 'Дата публикации',
            'file' => 'Изображение',
        ];
    }
}
