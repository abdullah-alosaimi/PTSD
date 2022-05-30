<?php
function cleanData($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = strip_tags($data);
    return $data;
}
    if(isset($_POST['email-signup']) && isset($_POST['pass-signup']) && isset($_POST['cpass-signup'])){
        $myemail = cleandata($_POST['email-signup']);
        $mypass = cleandata($_POST['pass-signup']);
        $mycpass = cleandata($_POST['cpass-signup']);
        $pts = 10;
    }


    if($mypass != $mycpass){
        include 'init.php';
        include("header.php");
        echo ' <h1>password don\'t match <a href="./index.php">click here to go back</a></h1></body></html>';
        die();
    }

    include 'db.php';

    $checkId = mysqli_query($db, "SELECT * FROM `user` WHERE email='$myemail' LIMIT 1");
    $num_rows = mysqli_num_rows($checkId);


    #check if exists
    if ($num_rows > 0) {
        $pageTitle = "Add Result";
        include 'init.php';
        include("header.php");
          echo "<h1 align = 'center'>The user email Already Exists</h1></body></html>";
    }
    else {
        $sql = "INSERT INTO `user` (email, pass, points) VALUES ('$myemail', '$mypass', '$pts')";

        $result = mysqli_query($db, $sql);
    
        include 'init.php';
        include 'header.php';
            echo "
            <table class=\"table\">
                <thead>
                    <tr>
                        <th>
                            User Email:
                        </th>
                        <th>
                            password: 
                        </th>
                        <th>
                            points: 
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            $myemail
                        </td>
                        <td>
                            $mypass
                        </td>
                        <td>
                            $pts pts
                        </td>
                    </tr>
                </tbody>
            </table>
        </body>
        </html>";
    }


?>