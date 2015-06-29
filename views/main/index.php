<?php
use app\components\FirstWidget; //  использование в текущем представлении функций и констант виджета app\components\FirstWidget
use app\components\SecondWidget; //  использование в текущем представлении функций и констант виджета app\components\FirstWidget
use yii\bootstrap\Modal;
//use yii\jui\DatePicker;

/* @var $this yii\web\View
 * @var $hello string */
?>
<h1>main/index</h1>

<p>
    <?= $hello  //  в представлении, выводм переданную переменну $hello ?>
</p>

<?=FirstWidget::widget(     //    в любом месте контанта, подключаем виджет
    [
        'a' =>  33,
        'b' =>  67
    ]
);  ?>


<?php
/**
 * присутствие методов: begin() end(), означает, что виджет имеет внутреннее содержимое, между этими методами.
 * А стока "Этот текст сделан красным" и является этим внутренним содержимым.
 */
?>
<?php SecondWidget::begin(); ?>

    Этот текст сделан красным

<?php SecondWidget::end(); ?>

<?php
Modal::begin([
    'header' => '<h2>Привет мир!!!</h2>',
    'toggleButton' => ['label' => 'нажми'],
]);

echo 'Это контент модального окна...';

Modal::end();
?>
<?php
?>