<?php
require_once("functions.php");
 
$id = $_GET['id'];
$query = "DELETE FROM user WHERE id = $id"; // query hapus data
 
if(mysqli_query($conn, $query)){
    header('Location: login.php'); // redirect ke login.php
}else{
    echo "Hapus data gagal";
}
?>