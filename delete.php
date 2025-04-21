<?php
include('db.php');

if(isset($_GET['id'])){
    $id = (int)$_GET['id']; 
    $sql = "DELETE from tasks where id = $id";
    $conn->query($sql);
    
}

header('Location: index.php');
exit;