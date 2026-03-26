<?php 

function get_cats(object $pdo){
    $query = "SELECT * FROM cats ORDER BY name ASC";
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

function search_cat(object $pdo, string $search){
    $search = "%" . $search . "%";
    $query = 'SELECT * FROM cats WHERE name LIKE :search ORDER BY name ASC';
    $statement = $pdo -> prepare($query);
    $statement->bindParam("search", $search);
    $statement->execute();

    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    if(!(empty($result))){
        return $result;
    }
    return NULL;


}



?>