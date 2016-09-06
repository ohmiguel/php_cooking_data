<!DOCTYPE html>
<html>
<head>
	<title>Dictionary</title>
</head>
<body>
	<h1>Dictionary</h1>
	<meta charset = "utf-8">

	<?php

		//How many words this dictionary contains?
		$string = file_get_contents("dictionnaire.txt", FILE_USE_INCLUDE_PATH);
		$dico = explode("\n", $string);
		echo "The dictionary contains"; 
		echo count($dico);"words";

		echo "<br>" ;

		$words_15 = array();
		foreach ($dico as $word) {
    	if (strlen($word) == 15) {
        array_push($words_15, $word);
		    }
		}
		echo count($words_15);
	?>


</body>
</html>