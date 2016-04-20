<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "services".
 *
 * @property integer $id
 * @property string $category
 * @property string $imgeFile
 * @property string $title
 * @property string $anons
 * @property string $content
 * @property string $metakeywords
 * @property string $metadescription
 */
class Services extends \yii\db\ActiveRecord
{
    public $file;
    /**
     * @inheritdoc
     *
     */
    public static function tableName()
    {
        return 'services';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category', 'imgeFile', 'title', 'anons', 'content', 'metakeywords', 'metadescription'], 'required'],
            [['anons', 'content', 'metakeywords', 'metadescription'], 'string'],
            [['category'], 'string', 'max' => 100],
            [['imgeFile'], 'string', 'max' => 50],
            [['title'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category' => 'Category',
            'imgeFile' => 'Imge File',
            'title' => 'Title',
            'anons' => 'Anons',
            'content' => 'Content',
            'metakeywords' => 'Metakeywords',
            'metadescription' => 'Metadescription',
        ];
    }
}
