<?php
	function getGETParameter(string $name): ?string
	{
		return isset($_GET[$name]) ?(string) $_GET[$name] : null;
	}
	$identifier = getGETParameter('identifier');
	if ($identifier != null)
	{
		if (preg_match('/[^a-zA-Z0-9]/', $identifier))
		{
			echo 'no';
		}
		else
		{
			 $result =	preg_match("/[0-9]/", $identifier[0]) ? 'no' : 'yes';
			 echo $result;
		}

	}
	else
	{
		echo "no";
	}