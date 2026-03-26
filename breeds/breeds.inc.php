<?php 
require_once("../ctrl.php");
if(!(isset($_GET["search"])) || is_invalid_search($_GET["search"])){
    header("Location: /breeds");
}
$search = $_GET["search"];

header("Location: /breeds/?search=" . $search);

?>