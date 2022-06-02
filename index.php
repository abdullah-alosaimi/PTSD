<?php include 'init.php'; ?>

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
                    <form action="./search.php" method="GET" >
                        <label class="fs-3 fw-bold">Search For a Book . . . </label>
                        <div class="input-group mb-3 bg-white">
                            <input id="search" name="search" type="text" class="form-control border border-dark" placeholder="Search For A book ..." aria-label="Search" aria-describedby="button-addon2">
                            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
                        </div>
                    </form>

                </center>
            </div>
        </div>

        <div class="row p-2">
        <?php if(!isset($_SESSION['email'])): ?>
            <div class="shadow col-6 align-middle p-3 border border-dark rounded" style="background-color: #bce0fa;">
            
                <center>
                    
                    <form onsubmit="return chk_signin();" method="POST" action="./signin.php">


                        <div class="form-floating mb-3">
                            <input name="email-signin" required id="email-signin" type="email" class="form-control" placeholder="name@example.com">
                            <label for="email-signin">Email address</label>
                            <small id="email-err-signin"></small>
                        </div>

                        <div class="form-floating mb-3">
                            <input name="pass-signin" required id="pass-signin" type="password" class="form-control" placeholder="Password">
                            <label for="pass-signin">Password</label>
                            <small id="pass-err-signin"></small>
                        </div>
                        <button class="btn btn-warning mx-4 fs-4" onclick="chk_signin();" type="submit">Sign in</button>

                    </form>
                    
                </center>
            </div>
            <div class="shadow col-6  align-middle p-3 border border-dark rounded" style="background-color: #bce0fa;">

                <center>
                
                    <form onsubmit="return chk_signup();" method="POST" action="./signup.php">
                        <div class="form-floating mb-3">
                            <input name="email-signup" required id="email-signup" type="email" class="form-control"  placeholder="name@example.com">
                            <label for="email-signup">Email address</label>
                            <small id="email-err-signup"></small>
                        </div>

                        <div class="form-floating mb-3">
                            <input name="pass-signup" required id="pass-signup" type="password" class="form-control"  placeholder="Password">
                            <label for="pass-signup">Password</label>
                            <small id="pass-err-signup"></small>
                        </div>

                        <div class="form-floating mb-3">
                            <input name="cpass-signup" required id="cpass-signup" type="password" class="form-control" placeholder="Password">
                            <label for="cpass-signup">Confirm Password</label>
                            <small id="cpass-err-signup"></small>
                        </div>


                        <button class="btn btn-primary mx-4 fs-4" onclick="chk_signup();" type="submit">Create account</button>
                    </form>

                </center>
            </div>
        <?php endif;?>
        <?php if(isset($_SESSION['email'])): ?>
            <div class="inline shadow col-12 align-middle p-3 border border-dark rounded" style="background-color: #bce0fa;">
                        
                <div class="container">
                    <div class="row">
                        <div class="col">
                        <h1 class="inline text-center">User id: </h1>
                        <h2 class="inline text-center "><?php echo $_SESSION['id'] ?></h2>
                        </div>
                        <div class="col">
                        <h1 class="inline text-center ">Email: </h1> 
                        <h2 class="inline text-center "><?php echo $_SESSION['email'] ?>  </h2> 
                        </div>
                        <div class="col">
                        <h1 class="inline text-center ">Points:</h1>         
                        <h2 class="inline text-center"><?php echo $_SESSION['points'] ?> </h2> 
                        </div>
                        <div class="col">
                        <a href="./signout.php" class="btn btn-primary mx-4 fs-4">Sign Out</a>
                        </div>
                    </div>
                </div>
                                
            </div>
        <?php endif;?>
        </div>

    </div>

    <script>
        function chk_signin() {
            var what = true;
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
                what = false;
            }
            if (pass.match(regexPass) == null) {
                errPass.innerHTML = msgPass;
                what = false;
            }

            return what;
        }

        function chk_signup() {
            var what = true;
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
                what = false;
            }
            if (pass.match(regexPass) == null) {
                errPass.innerHTML = msgPass;
                what = false;
            }
            if (cpass != pass) {
                errCpass.innerHTML = msgMatch;
                what = false;
            }

            return what;
        }
    </script>
</body>

</html>