<?php

namespace app\controllers;

class MainController extends \yii\web\Controller    // контроллер Main
{
    public function actionIndex()                   // действие Index
    {
        $hello = 'Привет Мир!!!';

        return $this->render(   //после действия контроллера Index, управление перейдет в представление Index (файл index.php в папке views\main).
            'index',
            [
                'hello' =>  $hello  //  в представлении main\index.php,передается переменная $hello и будет доступна там, как переменная $hello
            ]);

    }

}
