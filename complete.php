<?php
include('db.php');

if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];
    $sql = "UPDATE TASKS set iS_done = 1 WHERE ID = $id";
    $conn->query($sql);
}

header('Location: index.php');
exit;
