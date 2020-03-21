<?php
	function getGETParameter(string $text): ?string
	{
		return isset($_GET[$text]) ? (string) $_GET[$text] : null;
	}
	header("Content-Type: text/plain");
	$text = getGETParameter('text');
    while (preg_match("/  /", $text))
	{
		$text = str_replace('  ', ' ', $text);
	}
	echo trim($text);
?>