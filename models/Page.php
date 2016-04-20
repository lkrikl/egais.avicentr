<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "page".
 *
 * @property integer $id
 * @property string $page
 * @property string $title
 * @property string $text
 */
class Page extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'page';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['page', 'title', 'text'], 'required'],
            [['text'], 'string'],
            [['page'], 'string', 'max' => 250],
            [['title'], 'string', 'max' => 500]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'page' => 'Страница',
            'title' => 'Заголовок',
            'text' => 'Текст',
        ];
    }
}
