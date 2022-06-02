<?php
    include 'init.php';
    include 'header.php';
    function cleanData($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = trim($data);
        $data = htmlspecialchars($data);
        $data = strip_tags($data);
    return $data;
}
    if(isset($_POST['email-signin']) && isset($_POST['pass-signin'])){
        $bookname = cleandata($_POST['bookname']);
        $isbn = cleandata($_POST['isbn']);
        $course = cleandata($_POST['course']);
        $img = cleandata($_POST['img']);
    }else{
        die();
    }

    

    include 'db.php';

    $result = mysqli_query($db, "SELECT * FROM `books` WHERE isbn='$isbn' or title LIKE '%$bookname%' LIMIT 1");
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    $count = mysqli_num_rows($result);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    if($count == 0) {
        $sql = "INSERT INTO `books` (title, isbn, img) VALUES ('$bookname', '$isbn', '$img')";
        $result = mysqli_query($db, $sql);
    }


    $bid = $row['id'];
    $uid = $_SESSION['id'];
    $sql = "INSERT INTO `offers` (bid, uid) VALUES ($bid, $uid)";
    $result = mysqli_query($db, $sql);

    echo '
            <h1>Offer made</h1> <a class=\"btn btn-primary\" href=\"./offerbook.php\" role=\"button\">go back</a>
            <a class=\"btn btn-primary\" href=\"./account.php\" role=\"button\">Go to account page</a>
        </body>
        </html>';
?>