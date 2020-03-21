<?php
	function getGETParameter(string $parameter): ?string
	{
		return isset($_GET[$parameter]) ?(string) $_GET[$parameter] : null;
	}

	function getUserInfo()
	{
		$email = getGETParameter('email');
		if ($email == null)
		{
			echo "email обязателен для заполнения!";
		}
		else
		{
			$direction = "data/" . $email. '.txt';
			$email = "Email: $email";
			$firstName =  getGETParameter('first_name');
			$lastName = getGETParameter('last_name');
			$age = getGETParameter('age');
			if ($firstName != null)
			{
				$firstName = "First name: ". getGETParameter('first_name');
			}
			else
			{
				$firstName = "First name: ";
			}
			if ($lastName != null)
			{
				$lastName = "Last name: " . getGETParameter('last_name');
			}
			else
			{
				$lastName = "Last name: ";
			}
			if ($age != null)
			{
				$age = "Age: " . getGETParameter('age');
			}
			else
			{
				$age = "Age: ";
			}
			$info = ($email . "\r\n" . $lastName . "\r\n" . $firstName . "\r\n" . $age);
			$way = fopen($direction, 'w+');
			fwrite($way, $info);
			fclose($way);
		}		
	}	
	getUserInfo();
?>