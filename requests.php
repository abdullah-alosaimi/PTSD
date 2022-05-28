<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="favicon.ico">



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Pass The Stuff Down</title>
</head>

<body>
<?php  include './db.php'; ?>
<?php  include './header.php'; ?>


    <div class="container-fluid">
        <div class="row p-2">
            <table class="table table-info table-striped shadow col-12 h-50 w-100 align-middle p-3 border border-dark rounded">
                <thead>
                    <tr>
                        <th scope="col">
                            Request ID
                        </th>
                        <th scope="col">
                            Book title
                        </th>
                        <th scope="col">
                            ISBN
                        </th>
                        <th scope="col">
                            Requested by
                        </th>
                        <th scope="col">
                            Request date
                        </th>
                        <th scope="col" colspan="2" class="text-center">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">
                            A25
                        </th>
                        <td>
                            Java How to program
                        </td>
                        <td>
                            978-0-06-264154-0
                        </td>
                        <td>
                            UserName LastName
                        </td>
                        <td>
                            15<b>MAR</b>2022
                        </td>
                        <td class="text-center">
                            <button type="button" class="btn btn-secondary">Accept</button>
                        </td>
                        <td class="text-center">
                            <button type="button" class="btn btn-danger">Deny</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            A25
                        </th>
                        <td>
                            Java How to program
                        </td>
                        <td>
                            978-0-06-264154-0
                        </td>
                        <td>
                            UserName LastName
                        </td>
                        <td>
                            15<b>MAR</b>2022
                        </td>
                        <td class="text-center">
                            <button type="button" class="btn btn-secondary">Accept</button>
                        </td>
                        <td class="text-center">
                            <button type="button" class="btn btn-danger">Deny</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            A25
                        </th>
                        <td>
                            Java How to program
                        </td>
                        <td>
                            978-0-06-264154-0
                        </td>
                        <td>
                            UserName LastName
                        </td>
                        <td>
                            15<b>MAR</b>2022
                        </td>
                        <td class="text-center">
                            <button type="button" class="btn btn-secondary">Accept</button>
                        </td>
                        <td class="text-center">
                            <button type="button" class="btn btn-danger">Deny</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            A25
                        </th>
                        <td>
                            Java How to program
                        </td>
                        <td>
                            978-0-06-264154-0
                        </td>
                        <td>
                            UserName LastName
                        </td>
                        <td>
                            15<b>MAR</b>2022
                        </td>
                        <td class="text-center">
                            <button type="button" class="btn btn-secondary">Accept</button>
                        </td>
                        <td class="text-center">
                            <button type="button" class="btn btn-danger">Deny</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            A25
                        </th>
                        <td>
                            Java How to program
                        </td>
                        <td>
                            978-0-06-264154-0
                        </td>
                        <td>
                            UserName LastName
                        </td>
                        <td>
                            15<b>MAR</b>2022
                        </td>
                        <td class="text-center">
                            <button type="button" class="btn btn-secondary">Accept</button>
                        </td>
                        <td class="text-center">
                            <button type="button" class="btn btn-danger">Deny</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>