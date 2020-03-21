<?php
	function getGETParameter(string $parameter): ?string
	{
		return isset($_GET[$parameter]) ?(string) $_GET[$parameter]: null;
	}
	$email = getGETParameter('email');
	$email = $email . '.txt';
	$direction = "C:/phplabs/lw3/4/data/";
	chdir($direction);// меняем каталог
	if (file_exists($email))
	{
		$handle = fopen($email, 'r');
		$data = file($email);
		fclose($handle);
		$count = count($data);
		for ($i = 0; $i < $count; $i++){
			if ($data[$i] != null)
			{
				echo htmlspecialchars($data[$i]), '<br />';
			}
		
		}

	
	}
	else
	{
		echo 'Пользователь не найден';
	}
?>