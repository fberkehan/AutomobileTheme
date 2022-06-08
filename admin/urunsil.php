<?php 
$id = $_GET['id'];
$connect = mysqli_connect("localhost", "root", "root", "root");
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "DELETE FROM products WHERE id = $id";
$result = $connect->query($sql);


header('Location: index.php'); 

?>