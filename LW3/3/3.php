<?php
	function getGETParameter(string $password): ?string
	{
		return isset($_GET[$password]) ?(string) $_GET[$password] : null;
	}
	$password = getGETParameter('password');
	$strength = 0;// Изначальная надежность
	$length_of_password = strlen($password); // длина пароля
	preg_match_all("/[0-9]/", $password, $digits, PREG_SET_ORDER);// Кол-во цифр
	$digits = sizeof($digits);
	preg_match_all("/[A-Z]/", $password, $upperCase, PREG_SET_ORDER);// Кол-во больших букв
	$upperCase = sizeof($upperCase);
	preg_match_all("/[a-z]/", $password, $lowerCase, PREG_SET_ORDER);// Кол-во маленьких букв
	$lowerCase = sizeof($lowerCase);
	if (preg_match("/[^a-zA-Z0-9]/", $password))
	{
		echo "Пароль должен состоять только из англ. регистра и цифр";
	}
    else
    {
    	if (ctype_digit($password))// Если все цифры
		{
			$strength = $strength - $length_of_password;
		}
		if (ctype_alpha($password))// Если все буквы
		{
			$strength = $strength - $length_of_password;
		}
		foreach (count_chars($password, 1) as $matches => $val)
		{
			if ($val > 1)
			{
				$strength = $strength - $val;
			}
		}
		$strength = $strength + (4*($length_of_password));//+4n , n - кол-во символов
		$strength = $strength + (4*($digits));// +4n, n - кол-во цифр
		if ($upperCase !== 0)
		{
			 $strength = $strength + (2*($length_of_password - $upperCase));// если пароль содержит n символов в верхнем регистре
		}     
		if ($lowerCase !== 0)
		{
			$strength = $strength + (2*($length_of_password - $lowerCase));// если пароль содержит n символов в нижнем регистре
		}
		echo $strength;
	}
?>