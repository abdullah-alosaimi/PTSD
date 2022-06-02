<?php include 'init.php' ?>
    <?php  include './db.php'; ?>
    <?php  include './header.php'; ?>


    <div class="container-fluid">
        <div class="row p-2">
            <div class="shadow col-12 h-50 w-100 align-middle p-3 border border-dark rounded" style="background-color: #bce0fa;">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">
                                User ID
                            </th>
                            <th scope="col" class="text-center">
                                Email
                            </th>
                            <th scope="col" class="text-center">
                                Points
                            </th>
                            <th scope="col" class="text-center">
                                Edit
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">
                                <?php echo $_SESSION['id'] ?>
                            </td>
                            <td class="text-center">
                                <?php echo $_SESSION['email'] ?>
                            </td>
                            <td class="text-center">
                                <?php echo $_SESSION['points'] ?>
                            </td>
                            <td class="text-center">
                                <button type="button" class="btn btn-primary">Edit Account</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row p-2">
            <h1>Your offers: </h1>
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

        <div class="row p-2">
            <h1>Pendding Requests: </h1>
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