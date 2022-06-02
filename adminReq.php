<?php
    include 'init.php';
    if(!isset($_SESSION['admin'])){
        header("location: index.php");
    }

    include 'adminHeader.php';
?>

<div class="container-fluid">
    <div class="row p-2">
            <h1>All Books: </h1>
            <table class="table table-info table-striped shadow col-12 h-50 w-100 align-middle p-3 border border-dark rounded">
                <thead>
                    <tr>
                        <th scope="col">
                            Offer ID
                        </th>
                        <th scope="col">
                            Date
                        </th>
                        <th scope="col">
                           Book ID
                        </th>
                        <th scope="col">
                            Offer ID
                        </th>
                        <th scope="col">
                            User ID
                        </th>
                        <th scope="col" class="text-center">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include 'db.php';

                        $sql = "SELECT * FROM `request`";
                        $result = mysqli_query($db, $sql);

                        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                            $id = $row['id'];
                            $date = $row['date'];
                            $bid = $row['bid'];
                            $oid = $row['oid'];
                            $uid = $row['uid'];

                            echo "
                                    <tr>
                                <th scope=\"row\">
                                    $id
                                </th>
                                <td>
                                    $date
                                </td>
                                <td>
                                    $bid
                                </td>
                                <td>
                                    $oid
                                </td>
                                <td>
                                    $uid
                                </td>
                                <td class=\"text-center\">
                                    <form method=\"POST\" action=\"./deleteReq.php\">
                                        <input type=\"hidden\" value=\"$id\">
                                        <button type=\"button\" class=\"btn btn-danger\">DELETE</button>
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