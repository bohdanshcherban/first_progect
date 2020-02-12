<form method="post" action="index.php">
    <input type="number" name="years">
    <button type="submit">Отправить</button>
</form>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$years = isset($_POST['years']) && $_POST['years'] > 0 ? $_POST['years'] : false;
//var_dump($years);
if ($years) {

    echo 'Тебе ' . $years . ' лет, через 20 лет тебе будет ' . ($years + 20) * 12 . ' месяцев';
}
