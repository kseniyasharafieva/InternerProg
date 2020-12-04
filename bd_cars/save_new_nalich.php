<?php
 // Подключение к базе данных:
 $link = mysqli_connect("localhost", "f0478659_root", "123","f0478659_cars");

if (!$link) {
    echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
    echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
    
    exit;
}
 $sql_add = "INSERT INTO auto_nalich SET id_car='" . $_GET['id_car']
."', id_salon='".$_GET['id_salon']."'";
 mysqli_query($link,$sql_add); // Выполнение запроса
 if (mysqli_affected_rows()>0) // если нет ошибок при выполнении запроса
 { print "<p>Спасибо, салон добавлен.";
 print "<p><a href=\"index.php\"> Вернуться к списку
таблиц</a>"; }
 else { print "Ошибка сохранения. <a href=\"index.php\">
Вернуться к списку машин </a>"; }
?>