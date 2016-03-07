<?php
if(empty($_GET)) {
  die("Hei jonne nyt loppuu perseily!");
}
  $lahettaja = $_GET['lahettaja'];
  $viesti = $_GET['viesti'];

require_once("db.php");

if(strlen($lahettaja)!=0){
$sql = "INSERT INTO viestiseina (lahettaja,viesti) VALUES ('$lahettaja','$viesti');";
} else if(strlen($lahettaja)==0){
  $sql = "INSERT INTO viestiseina (viesti) VALUES ('$viesti');";
}

if($conn->query($sql) === TRUE){
  header('Location:index.php');
}else{
  echo "VIRHE";
}

$conn->close();
