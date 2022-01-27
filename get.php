<?php 
require 'conn.php';

class Book{
  var $weight;
  var $name;
  var $price;
  var $sku;
}

class Furniture{
  var $height;
  var $width;
  var $Length;
  var $name;
  var $price;
  var $sku;
}

class Dvd{
  var $Size;
  var $name;
  var $price;
  var $sku;
}

class products{
  private $id;
  public $name;
  public $price;
  public $weight;
  public $width;
  public $height;
  public $length;
  public $size;
  
public function getId(){
  return $this->id;
}

public function setId($id){
  $this->id=$id;
}

public function getName(){
  return $this->name;
}

public function setName($name){
  $this->name=$name;
}

public function getprice(){
  return $this->price;
}

public function setPrice($price){
  $this->price=$price;
}

public function getWeight(){
  return $this->weight;
}

public function setWeight($weight){
  $this->weight=$weight;
}

public function getwidth(){
  return $this->width;
}

public function setWidth($width){
  $this->width=$width;
}

public function getHeight(){
  return $this->height;
}

public function setHeight($height){
  $this->height=$height;
}

public function getLength(){
  return $this->length;
}

public function setLength($length){
  $this->length=$length;
}

public function getSize(){
  return $this->size;
}

public function setSize($size){
  $this->size=$size;
}

}

$sql = "SELECT * FROM `products` WHERE 1";


$sql_query = mysqli_query($conn, $sql);

$output =
"<div class='row'>";
while($row = mysqli_fetch_array($sql_query)) {     

    $output.='<div class="card" style="width: 18rem;">
    <div class="card-body">
    <!-- checkbox -->
    <div class="delete-checkbox" role="group" aria-label="Basic checkbox toggle button group">
    <input type="checkbox" class=".delete-checkbox" id="'.$row['ID'].'" autocomplete="off">
    <label class="" for="'.$row['ID'].'">Delete</label>
    </div>
    <!-- end of checkbox -->
      <h12 class="card-subtitle mb-2 text-muted">'.$row['ID'].'</h12>
      <h5 class="card-title">'.$row['Name'].'</h5>
      <h6 class="card-subtitle mb-2 text-muted">Price: '.$row['Price'].'$</h6>
      
      
      <p class="card-text"></p>
      
    </div>
  </div>';
  
}

$output.="</div>";

echo $output;
?>

