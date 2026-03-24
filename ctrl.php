<?php 

/* function parse_breed_standard(string $x){
    $br_token = strtok($x, "\n");
    while($br_token != false){
        echo $br_token . "<br>";

        $br_token = strtok("\n");
    }
} */


function parse_breed_standard(string $x){
    $breed_standard = [];
    $br_token = strtok($x, "\n");
    while ($br_token !== false) {
        $breed_standard[] = $br_token;
        $br_token = strtok("\n");
    }

    foreach($breed_standard as $standard){
        echo $standard . "<br><br>";
    }
}

?>