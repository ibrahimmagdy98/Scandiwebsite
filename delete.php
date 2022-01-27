<?php 
require 'conn.php';

$ids = $_POST['ids'];

for($i = 0; $i<count($ids);$i++){
    $sql = $sql = "DELETE FROM `products` WHERE `ID` = '$ids[$i]'";
    $sql_query = mysqli_query($conn, $sql);
}

?>

