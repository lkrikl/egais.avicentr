<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "scanner".
 *
 * @property integer $ig
 * @property string $type_org
 * @property string $hardware
 * @property string $software
 * @property string $name
 * @property string $imgeFile
 * @property string $price
 * @property string $egais
 * @property string $proizv
 * @property string $type_scan
 * @property string $type_scan_mod
 * @property string $schit_kod
 * @property string $rastr_scan
 * @property string $interf_conn
 * @property string $class_secur
 * @property string $color
 * @property string $gorant
 * @property string $primetka
 */
class Scanner extends \yii\db\ActiveRecord
{
    public $file;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'scanner';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type_org', 'hardware', 'software', 'name', 'imgeFile', 'price', 'egais', 'proizv', 'type_scan', 'type_scan_mod', 'schit_kod', 'interf_conn', 'class_secur', 'color', 'gorant', 'primetka'], 'required'],
            [['primetka'], 'string'],
            [['type_org', 'hardware', 'software', 'name', 'imgeFile', 'price', 'egais', 'proizv', 'type_scan', 'type_scan_mod', 'schit_kod', 'rastr_scan', 'interf_conn', 'class_secur', 'color', 'gorant'], 'string', 'max' => 500]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ig' => 'Ig',
            'type_org' => 'Тип организации',
            'hardware' => 'Аппаратная часть',
            'software' => 'ПО для кассового места',
            'name' => 'Название',
            'imgeFile' => 'Картинка',
            'price' => 'Цена',
            'egais' => 'Рекомендуем',
            'proizv' => 'Производитель',
            'type_scan' => 'Тип сканера',
            'type_scan_mod' => 'Тип сканирующего модуля',
            'schit_kod' => 'Считываемые коды',
            'rastr_scan' => 'Растр сканирования',
            'interf_conn' => 'Интерфейс подключения',
            'class_secur' => 'Класс защиты',
            'color' => 'Цвет',
            'gorant' => 'Гарантия',
            'primetka' => 'Примечание',
            'file' => 'Фото',
        ];
    }
}
