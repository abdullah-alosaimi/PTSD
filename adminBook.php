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
                            Book ID
                        </th>
                        <th scope="col">
                            Title
                        </th>
                        <th scope="col">
                           ISBN
                        </th>
                        <th scope="col">
                            Image
                        </th>
                        <th scope="col" class="text-center">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include 'db.php';

                        $sql = "SELECT * FROM `books`";
                        $result = mysqli_query($db, $sql);

                        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                            $id = $row['id'];
                            $title = $row['title'];
                            $isbn = $row['isbn'];
                            $img = $row['img'];

                            echo "
                                    <tr>
                                <th scope=\"row\">
                                    $id
                                </th>
                                <td>
                                    $title
                                </td>
                                <td>
                                    $isbn
                                </td>
                                <td>
                                    <img src=\"$img\" width=\"50\">
                                </td>
                                <td class=\"text-center\">
                                    <form method=\"POST\" action=\"./deleteBook.php\">
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