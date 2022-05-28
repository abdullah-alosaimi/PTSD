<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="favicon.ico">

    <link rel="stylesheet" href="./style/style.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Pass The Stuff Down</title>

    <style>
        small {
            color: red;
        }
    </style>
</head>

<body>
    
    <?php  include './db.php'; ?>
    <div class="container-fluid">
        <div class="row p-2">
            <div class="shadow col-12 h-50 w-100 align-middle p-3 border border-dark rounded" style="background-color: #bce0fa;">
                <center>
                    <p><img src="./favicon.svg" alt="Icon" height="300"></p>
                    <p class="fs-1 fw-bold">Pass The Stuff Down</p>
                </center>
            </div>
        </div>
        <div class="row p-2">
            <div class="shadow col-12 h-50 w-100 align-middle p-3 border border-dark rounded" style="background-color: #bce0fa;">
                <center>
                    <form>
                        <label class="fs-3 fw-bold">Search For a Book . . . </label>
                        <div class="input-group mb-3 bg-white">
                            <input type="text" class="form-control border border-dark" placeholder="Search For A book ..." aria-label="Search" aria-describedby="button-addon2">
                            <a href="./search.php"> <button class="btn btn-outline-secondary" type="button" id="button-addon2">Search</button> </a>
                        </div>


                    </form>

                </center>
            </div>
        </div>

        <div class="row p-2">
            <div class="shadow col-6 align-middle p-3 border border-dark rounded" style="background-color: #bce0fa;">

                <center>
                    <form>


                        <div class="form-floating mb-3">
                            <input id="email-signin" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Email address</label>
                            <small id="email-err-signin"></small>
                        </div>

                        <div class="form-floating mb-3">
                            <input id="pass-signin" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                            <small id="pass-err-signin"></small>
                        </div>
                        <button class="btn btn-warning mx-4 fs-4" onclick="chk_signin();">Sign in</button>

                    </form>

                </center>
            </div>
            <div class="shadow col-6  align-middle p-3 border border-dark rounded" style="background-color: #bce0fa;">

                <center>
                    <form>
                        <div class="form-floating mb-3">
                            <input id="email-signup" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Email address</label>
                            <small id="email-err-signup"></small>
                        </div>

                        <div class="form-floating mb-3">
                            <input id="pass-signup" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                            <small id="pass-err-signup"></small>
                        </div>

                        <div class="form-floating mb-3">
                            <input id="cpass-signup" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Confirm Password</label>
                            <small id="cpass-err-signup"></small>
                        </div>


                        <button class="btn btn-primary mx-4 fs-4" onclick="chk_signup();">Create account</button>
                    </form>

                </center>
            </div>
        </div>
    </div>

    <script>
        function chk_signin() {
            var email = document.getElementById("email-signin").value;
            var pass = document.getElementById("pass-signin").value;

            const regexEmail = /^\S+@\S+\.\S+$/g;
            const regexPass = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/g;

            var errPass = document.getElementById("pass-err-signin");
            var errEmail = document.getElementById("email-err-signin");

            const msgPass = "Password must has at least 8 characters that include at least 1 lowercase character, 1 uppercase characters, 1 number.";
            const msgEmail = "Email is not valid, and can't be blank";

            errEmail.innerHTML = "";
            errPass.innerHTML = "";
            if (email.match(regexEmail) == null) {
                errEmail.innerHTML = msgEmail;
            }
            if (pass.match(regexPass) == null) {
                errPass.innerHTML = msgPass;
            }
        }

        function chk_signup() {
            var email = document.getElementById("email-signup").value;
            var pass = document.getElementById("pass-signup").value;
            var cpass = document.getElementById("cpass-signup").value;

            const regexEmail = /^\S+@\S+\.\S+$/g;
            const regexPass = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/g;

            var errPass = document.getElementById("pass-err-signup");
            var errCpass = document.getElementById("cpass-err-signup");
            var errEmail = document.getElementById("email-err-signup");

            const msgPass = "Password must has at least 8 characters that include at least 1 lowercase character, 1 uppercase characters, 1 number.";
            const msgEmail = "Email is not valid, and can't be blank";
            const msgMatch = "The password does not match";

            errEmail.innerHTML = "";
            errPass.innerHTML = "";
            errCpass.innerHTML = "";

            if (email.match(regexEmail) == null) {
                errEmail.innerHTML = msgEmail;
            }
            if (pass.match(regexPass) == null) {
                errPass.innerHTML = msgPass;
            }
            if (cpass != pass) {
                errCpass.innerHTML = msgMatch;
            }
        }
    </script>
</body>

</html>