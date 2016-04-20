<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tcd".
 *
 * @property integer $id
 * @property string $type_org
 * @property string $harware
 * @property string $software
 * @property string $name
 * @property string $imgeFile
 * @property string $price
 * @property string $egais
 * @property string $proizv
 * @property string $processor
 * @property string $ddr
 * @property string $display
 * @property string $type_display
 * @property string $type_schit
 * @property string $speed_scan
 * @property string $daln_schit
 * @property string $klav
 * @property string $os
 * @property string $rus
 * @property string $interf
 * @property string $gsm
 * @property string $pil
 * @property string $temp
 * @property string $gobar
 * @property string $ves
 * @property string $primetka
 */
class Tcd extends \yii\db\ActiveRecord
{
    public $file;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tcd';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type_org', 'harware', 'software', 'name', 'imgeFile', 'price', 'egais', 'proizv', 'processor', 'ddr', 'display', 'type_display', 'type_schit', 'speed_scan', 'daln_schit', 'os', 'rus', 'interf', 'gsm', 'pil', 'temp', 'gobar', 'ves', 'primetka'], 'required'],
            [['primetka'], 'string'],
            [['type_org', 'harware', 'software', 'name', 'imgeFile', 'price', 'egais', 'proizv', 'processor', 'ddr', 'display', 'type_display', 'type_schit', 'speed_scan', 'daln_schit', 'klav', 'os', 'rus', 'interf', 'gsm', 'pil', 'temp', 'gobar', 'ves'], 'string', 'max' => 500]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type_org' => 'Type Org',
            'harware' => 'Harware',
            'software' => 'Software',
            'name' => 'Name',
            'imgeFile' => 'Imge File',
            'price' => 'Price',
            'egais' => 'Egais',
            'proizv' => 'Proizv',
            'processor' => 'Processor',
            'ddr' => 'Ddr',
            'display' => 'Display',
            'type_display' => 'Type Display',
            'type_schit' => 'Type Schit',
            'speed_scan' => 'Speed Scan',
            'daln_schit' => 'Daln Schit',
            'klav' => 'Klav',
            'os' => 'Os',
            'rus' => 'Rus',
            'interf' => 'Interf',
            'gsm' => 'Gsm',
            'pil' => 'Pil',
            'temp' => 'Temp',
            'gobar' => 'Gobar',
            'ves' => 'Ves',
            'primetka' => 'Primetka',
        ];
    }
}
