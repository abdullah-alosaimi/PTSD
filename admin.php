<?php
    include 'init.php';
    if(!isset($_SESSION['admin'])){
        header("location: index.php");
    }

    include 'adminHeader.php';
?>

<div class="container-fluid">
    <div class="row p-2">
            <h1>All users: </h1>
            <table class="table table-info table-striped shadow col-12 h-50 w-100 align-middle p-3 border border-dark rounded">
                <thead>
                    <tr>
                        <th scope="col">
                            User ID
                        </th>
                        <th scope="col">
                            Email
                        </th>
                        <th scope="col">
                           Points
                        </th>
                        <th scope="col" colspan="2" class="text-center">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include 'db.php';

                        $sql = "SELECT * FROM `user`";
                        $result = mysqli_query($db, $sql);

                        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                            $id = $row['id'];
                            $email = $row['email'];
                            $points = $row['points'];
                            

                            echo "
                                    <tr>
                                <th scope=\"row\">
                                    $id
                                </th>
                                <td>
                                    $email
                                </td>
                                <td>
                                    $points
                                </td>
                                <td class=\"text-center\">
                                    <form method=\"POST\" action=\"./deleteUser.php\">
                                        <input id=\"id\" name=\"id\" type=\"hidden\" value=\"$id\">
                                        <button type=\"button\" class=\"btn btn-danger\">DELETE</button>
                                    </form>
                                </td>
                                <td class=\"text-center\">
                                    <form method=\"POST\" action=\"./adminUser.php\">
                                        <input id=\"id\" name=\"id\" type=\"hidden\" value=\"$id\">
                                        <button type=\"button\" class=\"btn btn-primary\">Make Admin</button>
                                    </form>
                                </td>
                            </tr>
                            ";
                        }
                    ?>
                </tbody>
            </table>
    </div>
</div>