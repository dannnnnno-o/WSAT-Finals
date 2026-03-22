<?php 

function get_cats(object $pdo){
    $query = "SELECT * FROM cats";
    $statement = $pdo -> prepare($query);
    $statement->execute();

    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function get_cat_by_name(object $pdo, string $name){
    $query ="SELECT * FROM cats WHERE name = :name;";
    $statement = $pdo ->prepare($query);
    $statement->bindParam("name", $name);
    $statement->execute();

    $result = $statement->fetch();
    return $result;
}



?>