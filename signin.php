<?php
function cleanData($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = strip_tags($data);
    return $data;
}
    if(isset($_POST['email-signin']) && isset($_POST['pass-signin'])){
        $myemail = cleandata($_POST['email-signin']);
        $mypass = cleandata($_POST['pass-signin']);
        $pts = 10;
    }else{
        die();
    }

    

    include 'db.php';

    $result = mysqli_query($db, "SELECT * FROM `user` WHERE email='$myemail' AND pass='$mypass'; ");
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    $count = mysqli_num_rows($result);

    if($count == 1) {
        $_SESSION['email'] = $row['email'];
        $_SESSION['id'] = $row['id'];
        $_SESSION['points'] = $row['points'];
        $a = $_SESSION['email'];
        $b = $_SESSION['id'];
        $c = $_SESSION['points'];

        include 'init.php';
        include 'header.php'; 
    
        print `$a, $b, $c</body></html>`;
        //header("location: index.php");
     }else {
        $error = '<h1> Your Login Name or Password is invalid <a href="./index.php">click here to go back </a> </h1>';
     }
?>