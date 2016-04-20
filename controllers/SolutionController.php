<?php

namespace app\controllers;

use app\models\Score;

class SolutionController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $scanner_android = \app\models\Scanner::find()
            ->where(['type_org' => 'Один розничный магазин, который продает крепкий алкоголь'])
            ->where(['hardware' => 'Планшет на Android'])
            ->where(['software' => 'АТОЛ TabletPOS'])
            ->where(['egais' => 'Нет'])
            ->one();
        $scanner_win10 = \app\models\Scanner::find()
            ->where(['type_org' => 'Один розничный магазин, который продает крепкий алкоголь'])
            ->where(['hardware' => 'Планшет на Windows 10'])
            ->where(['software' => 'Штрих-М: Кассир 5 (USB)'])
            ->where(['egais' => 'Нет'])
            ->one();
        $fr_win10_kass_usb = \app\models\Fr::find()
            ->where(['type_org' => 'Один розничный магазин, который продает крепкий алкоголь'])
            ->where(['hardware' => 'Планшет на Windows 10'])
            ->where(['egais' => 'Нет'])
            ->one();
        return $this->render('index',[
            'scanner_android' => $scanner_android,
            'scanner_win10' => $scanner_win10,
            'fr_win10_kass_usb' => $fr_win10_kass_usb,
        ]);
    }
    public function actionAddscore() {


        $to = 'n.gubenko@avicentr.ru';
        $subject = 'Оборудование для ЕГАИС';
        $from = 'egais@avicentr.ru';
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= 'From: '.$from."\r\n".
           'Reply-To: '.$from."\r\n" .
            'X-Mailer: PHP/' . phpversion();
        $message = '<html><body>';
        $message .= '<h1 style="color:#f40;">Здравствуйте, ';
        $message .= $_POST['name'];
        $message .= '</h1>';
        $message .= '<p style="color:#080;font-size:18px;">Вы сделали заказ оборудования для ЕГАИС. Список необходимого оборудования ниже.</p>';
        $message .= $_POST['city_id'];
        $message .= '</body></html>';
        if(mail($to, $subject, $message, $headers)){
            echo 'Your mail has been sent successfully.';
        } else{
            echo 'Unable to send email. Please try again.';
        }



/*

        $message = 'Name: '. $_POST['name'].' -> ';
        $message .= ' Phone: '. $_POST['phone'].' -> ';
        $message .= ' E-mail: '. $_POST['email'].' -> ';
        $message .= ' Admin: http://egais.avicentr.ru/admin';

        $to      = 'n.gubenko@avicentr.ru';
        $subject = 'Новая заявка ЕГАИС';
        $headers = 'From: egais@avicentr.ru' . "\r\n" .
            'Reply-To: webmaster@example.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        mail($to, $subject, $message, $headers);
*/
        $customer = new Score();
        $customer->name = $_POST['name'];
        $customer->phone = $_POST['phone'];
        $customer->email = $_POST['email'];
        $customer->scanner = $_POST['email'];
        $customer->fr = $_POST['phone'];
        $customer->status = 'Новый';
        $customer->order = $_POST['city_id'];
        $customer->date = date("Y-m-d H:i");

        $customer->save(false);

        return $this->render('addscore');
    }


}
