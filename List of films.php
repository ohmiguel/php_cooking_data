<!DOCTYPE html>
<html>
	<body>
        <h1>List of films</h1>
        <meta charset = "utf-8">
        
        <?php
        $string = file_get_contents("films.json", FILE_USE_INCLUDE_PATH);
        $brut = json_decode($string, true);
        $top = $brut["feed"]["entry"]; # list of films
        $array=count ($top);


        echo '<pre>';
        print_r ($top);
       
        echo '</pre>';

         //echo count($dico);
         //print_r($string);
         echo count($string);

         //sort($string);
         rsort($string);

        ?>
    </body>
</html>

