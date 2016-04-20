<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "device".
 *
 * @property integer $id
 * @property string $type_organization
 * @property string $ca
 * @property string $hardware
 * @property string $software
 * @property string $scanner
 * @property string $fr_print
 * @property string $tcd
 * @property string $imgeFile
 * @property string $title
 * @property string $tth
 * @property string $price
 */
class Device extends \yii\db\ActiveRecord
{
    public $file;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'device';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type_organization', 'ca', 'hardware', 'software', 'scanner', 'imgeFile', 'title', 'tth', 'price'], 'required'],
            [['tth'], 'string'],
            [['type_organization', 'ca', 'hardware', 'software', 'scanner', 'fr_print', 'tcd', 'imgeFile', 'title', 'price'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type_organization' => 'Type Organization',
            'ca' => 'Ca',
            'hardware' => 'Hardware',
            'software' => 'Software',
            'scanner' => 'Scanner',
            'fr_print' => 'Fr Print',
            'tcd' => 'Tcd',
            'imgeFile' => 'Imge File',
            'title' => 'Title',
            'tth' => 'Tth',
            'price' => 'Price',
        ];
    }
}
