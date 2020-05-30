<?php
  $firstName = $_POST['FirstName'];
  $email = $_POST['Email'];
  $message = $_POST['Message'];
  $isCorrectName = (preg_match('/^[a-zA-Zа-яёА-ЯЁ\s\-]+$/u', $firstName));
  $isCorrectEmail = (filter_var($email, FILTER_VALIDATE_EMAIL));
  if (($isCorrectName) && ($isCorrectEmail)) 
  {
    echo "1";//Все ОК
  } 
  if (!$isCorrectName) 
  {
    echo "2";//Ошибка в имени
  }
  if (!$isCorrectEmail) 
  {
    echo "3";//Ошибка в эмейле
  }
?>