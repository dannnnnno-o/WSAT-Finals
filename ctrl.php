<?php 

function parse_breed_standard(string $x){
    $br_token = strtok($x, "\n");
    while($br_token != false){
        echo $br_token /* .  "linebreak\n" */;

        $br_token = strtok("\n");
    }
}


?>