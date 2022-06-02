<?php
    include 'db.php';

    $sql = "SELECT * FROM `admin` WHERE id='$_POST[id]';";

    $result = mysqli_query($db, $sql);

    $count = mysqli_num_rows($result);

    if($count == 0){
        $sql = "INSERT INTO `admin` (id) VALUES ($id);";
        $result = mysqli_query($db, $sql);
    }
?>