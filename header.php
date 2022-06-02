<nav class="navbar navbar-expand-lg navbar-light sticky-top rounded-bottom rounded-3" style="background-color: #bce0fa;">

        <div class="container-fluid">
            <a class="navbar-brand" href="./index.php">
                <img src="./favicon.svg" alt="Icon" width="50" height="60">
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 fw-bolder">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
                    </li>
                    <?php if(isset($_SESSION['email'])): ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                         Account
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="./requests.php">Manage requests</a></li>
                            <li><a class="dropdown-item" href="./offerbook.php">Make an offer</a></li>
                            <li><a class="dropdown-item" href="./account.php">Account page</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="./signout.php">Sign out</a></li>
                        </ul>
                    </li>
                    <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./index.php">Sign-in</a>
                    </li>
                    <?php endif;?>
                </ul>
                
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>