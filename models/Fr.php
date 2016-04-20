<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fr".
 *
 * @property integer $id
 * @property string $type_org
 * @property string $hardware
 * @property string $software
 * @property string $name
 * @property string $imgeFile
 * @property string $price
 * @property string $egais
 * @property string $proizv
 * @property string $color
 * @property string $autootrez_check
 * @property string $garant
 * @property string $interf_conn
 * @property string $metod_print
 * @property string $speed_print
 * @property string $speed_print_qr
 * @property string $lenght_check_lent
 * @property string $gabarit
 * @property string $primetka
 */
class Fr extends \yii\db\ActiveRecord
{
    public $file;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'fr';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type_org', 'hardware', 'software', 'name', 'imgeFile', 'price', 'egais', 'proizv', 'color', 'autootrez_check', 'garant', 'interf_conn', 'metod_print', 'speed_print', 'speed_print_qr', 'lenght_check_lent', 'gabarit', 'primetka'], 'required'],
            [['primetka'], 'string'],
            [['type_org', 'hardware', 'software', 'name', 'imgeFile', 'price', 'egais', 'proizv', 'color', 'autootrez_check', 'garant', 'interf_conn', 'metod_print', 'speed_print', 'speed_print_qr', 'lenght_check_lent', 'gabarit'], 'string', 'max' => 500]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type_org' => 'Тип оргвнизации',
            'hardware' => 'Аппаратная часть',
            'software' => 'ПО для кассового места',
            'name' => 'Название',
            'imgeFile' => 'Imge File',
            'price' => 'Цена',
            'egais' => 'ЕГАИС',
            'proizv' => 'Производитель',
            'color' => 'Цвет',
            'autootrez_check' => 'Автоотрез чека',
            'garant' => 'Гарантия',
            'interf_conn' => 'Интерфейс подключения',
            'metod_print' => 'Метод печати',
            'speed_print' => 'Скорость печати',
            'speed_print_qr' => 'Скорость печати QR-кода в сек.',
            'lenght_check_lent' => 'Ширина чековой ленты',
            'gabarit' => 'Габариты',
            'primetka' => 'Приметка',
        ];
    }
}
