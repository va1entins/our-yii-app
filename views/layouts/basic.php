<?php
use app\assets\AppAsset; // указываем Yii, что используем класс AppAsset, находящийся в папаке assets/AppAsset.php
/**
 * Created by PhpStorm.
 * User: valentin
 * Date: 28.06.2015
 * Time: 15:34
 */
/* @var $content string
 * @var $this \yii\web\view */
AppAsset::register($this);  //  Регистрируем AppAsset, с добавленными в него зависимостями, в шаблоне
$this->beginPage();          //  Метка начала страницы.
?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language; //Указываем, что бы шаблон использовал язык и место полжение, определенное в нвстройках приложения. ?>">
<head>

    <meta charset="<?= Yii::$app->charset;  //  подключение кодировки ?>">
    <?php $this->registerMetaTag(   //  подключение метатегов
        [
            'name'  =>  'viewport',
            'content'   =>  'width=device-width, initial-scale=1'
        ]
    );
    ?>
    <title><?= Yii::$app->name; ?></title>

    <?php $this->head(); // метка для заголовка. должен вызываться между тегами head. при генерайии подставляет вместо себя css файлы, мета теги и ссылки на внешние ресурсы ?>
</head>
<body>
<?php $this->beginBody();    //  метка начала содержания страницы. Ставится после <body>, подставляет вместо себя js файлы, в свойстве $jsOption которых, указана позиция \yii\web\View::POST_BEGIN ?>
<p>верхняя часть сайта</p>

<?= $content ?>

<p>нижняя часть сайта</p>
<?php $this->endBody();     //  метка конца содержания страницы. Ставится перед </body>. Добавляет вместо себя js файлы ?>
</body>
</html>
<?php
$this->endPage(); // метка конца страницы. вызывается после </html>.