<?php
date_default_timezone_set('Asia/Tokyo');
// var_dump($_POST);
// exit();

$result = array(date("m月d日H:i", time()), $_POST['status']);
// $time = time();
// $deadline = $_POST["deadline"];

$write_data = "{$result[0]},{$result[1]}\n";

$file = fopen("data/dakoku.csv", "a");

flock($file, LOCK_EX);

fwrite($file, $write_data);

fclose($file);

header("Location:index.php");
