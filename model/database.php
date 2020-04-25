<?php
/*با استفاه از این متغیر  مشکل حروف فارسی رو به طور کامل حل کردیم همچنین ارور لاگ دیتابیس رو فعال کردیم*/
$options = [
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
];
$connection = new PDO('mysql:host=localhost;dbname=prosec', 'root', '', $options);


?>