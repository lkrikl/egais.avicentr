<?php
/**
 * Created by PhpStorm.
 * User: Коля
 * Date: 24.02.2016
 * Time: 19:02
 */
namespace app\models;

use yii\base\Model;
use yii\web\UploadedFile;

class UploadForm extends Model
{
    /**
     * @var UploadedFile
     */
    public $imgeFile;

    public function rules()
    {
        return [
            [['imgeFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
        ];
    }

    public function upload()
    {
        if ($this->validate()) {
            $name = $this->getName();
            $this->imgeFile->saveAs('uploads/' . $name . '.' . $this->imgeFile->extension);
            return true;
        } else {
            return false;
        }
    }

    public function uploadCustom()
    {
        if ($this->validate()) {
            $name = $this->getName();
            $this->imgeFile->saveAs('uploads/' . $name . '.' . $this->imgeFile->extension);
            return $name.'.'.$this->imgeFile->extension;
        } else {
            return false;
        }
    }

    public function attributeLabels()
    {
        return [
            'imgeFile' => 'Загрузить изображение   ',
        ];
    }



}