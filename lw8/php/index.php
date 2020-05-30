<?php
 $directory = 'data/';
 if (!(file_exists($directory))){
 	mkdir($directory, 0777, true);
 }
 $directory = $directory . $_POST['email'] . '.txt';
 $info = fopen($directory, 'w');
 fwrite($info, 'Имя: ' . $_POST['first_name'] . "\n");
 fwrite($info, 'Email: ' . $_POST['email'] . "\n");
 fwrite($info, 'Страна: ' . $_POST['country'] . "\n");
 fwrite($info, 'Пол: ' . $_POST['gender'] . "\n");
 fwrite($info, 'Сообщение: ' . $_POST['message'] . "\n");
 fclose($info);