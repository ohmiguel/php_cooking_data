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
    echo count($dico);

    echo "<br>" ;

    $words_15 = array();
    foreach ($dico as $word) {
        if (strlen($word) == 15) {
            array_push($words_15, $word);
        }
    }

    echo count($words_15);
    echo "words have exactly 15 characters";
    echo "<br>" ;

    $words_w = array();
    foreach ($dico as $word) {
        if (strpos($word, "w") !== false) {
            array_push($words_w, $word);
        }
    }

    echo count($words_w);
    echo "words containing the letter 'w'";
    echo "<br>" ;

    //How many words containing the letter 'w'?
    $words_q = array();
    foreach ($dico as $word) {
        if (substr($word, -1) == "q") {
            array_push($words_q, $word);
        }
    }

    echo count($words_q); 
    echo "words containing the letter 'q'"; 

    echo $total."\n";
    ?>



</body>
</html>



