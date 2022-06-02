<?php
    include 'db.php';

    $sql = "SELECT * FROM `admin` WHERE id='$_POST[id]';";

    $result = mysqli_query($db, $sql);

    $count = mysqli_num_rows($result);

    if($count == 0){
        $sql = "DELETE FROM `admin` WHERE id='$id';";
        $result = mysqli_query($db, $sql);
    }
    
    header("location: admin.php");
?>