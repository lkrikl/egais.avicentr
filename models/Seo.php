<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "seo".
 *
 * @property integer $id
 * @property string $page
 * @property string $title
 * @property string $matakeywords
 * @property string $metadescription
 */
class Seo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'seo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['page', 'title', 'matakeywords', 'metadescription'], 'required'],
            [['matakeywords', 'metadescription'], 'string'],
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
            'matakeywords' => 'Metakeywords',
            'metadescription' => 'Metadescription',
        ];
    }
}
