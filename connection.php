<?php


if (isset($_POST["sku"])) {
  $sku =$_POST['sku']; 
}
if (isset($_POST["name"])) {
  $name =$_POST['name']; 
}
if (isset($_POST["price"])) {
  $price =$_POST['price']; 
}
if (isset($_POST["#size"])) {
  $size =$_POST['#size']; 
}
if (isset($_POST["#weight"])) {
  $weight =$_POST['#weight']; 
}
if (isset($_POST["#height"])) {
  $height =$_POST['#height']; 
}
if (isset($_POST["#length"])) {
  $length =$_POST['#length']; 
}
if (isset($_POST["#width"])) {
  $width =$_POST['#width']; 
}


if(!empty($sku) || !empty($name)  || !empty($price)){
 $servername = "localhost";
 $username = "id18297512_root";
 $password = "Yt~a3Qq$%!1fu?4e";
 $db = "id18297512_scandiweb"; 

 $conn = new mysqli($servername, $username, $password, $db);

 if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else{
  $SELECT = "SELECT ID from products Where ID = ? Limit 1";
  $INSERT = "INSERT INTO `products`(`ID`, `Name`, `Price`, `Size`, `Weight`, `Height`, `Length`, `Width`)
   VALUES (?,?,?,?,?,?,?,?)";

   $stmt=$conn->prepare($SELECT);
   $stmt->bind_param("i",$sku);
   $stmt->execute();
   $stmt->bind_result($sku);
   $stmt->store_result();
   $rnum=$stmt->num_rows;

   if($rnum==0){
     $stmt->close();

     $stmt=$conn->prepare($INSERT);
     $stmt->bind_param("isiiiiii",$sku,$name,$price,$size,$weight,$height,$length,$width);
     $stmt->execute();

     


   }else{
     echo"SKU is already taken";  
   }
   $stmt->close();
   $conn->close();

}


}else{
  echo "all field are required";
  die();
}
header('Location: index.html');
exit;

?>