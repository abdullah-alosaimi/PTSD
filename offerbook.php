<?php include 'init.php' ?>

    <?php  include './header.php'; ?>



    <div class="row row-cols-1 row-cols-md-5 g-4 mt-2 m-3">
        <div class="shadow col-12 h-50 w-100 align-middle p-3 border border-dark rounded" style="background-color: #bce0fa;">
            <center>
                <h1 class="fw-bolder text-center">
                    Offer a Book
                </h1>
                <form onsubmit="return false;">
                    <div class="mb-3">
                        <label for="formFile" class="form-label text-lg-start fw-bolder">1-Book name*</label>
                        <input class="form-control" type="text" placeholder="eg. Java how to program" aria-label="default input example">
                    </div>

                    <div class="mb-3">
                        <label for="formFile" class="form-label text-lg-start fw-bolder">2-Send image link</label>
                        <input class="form-control" type="text" placeholder="eg. *url*.png" aria-label="default input example">
                    </div>

                    <div class="mb-3">
                        <label for="formFile" class="form-label text-lg-start fw-bolder">3-ISBN*</label>
                        <input id="isbn" class="form-control" type="text" placeholder="eg. 978-3-16-148410-0" aria-label="default input example">
                        <small id="err-isbn"></small>
                    </div>

                    <div class="mb-3">
                        <label for="formFile" class="form-label text-lg-start fw-bolder">4-For course?*</label>
                        <input class="form-control" type="text" placeholder="eg. Programming 1" aria-label="default input example">
                    </div>
                    <button class="btn btn-primary mb-3" onclick="chk();">Submit</button>
                </form>
            </center>

        </div>

    </div>

    <script>
        function chk() {
            var isbn = document.getElementById("isbn").value;

            const regex = /^\d{3}-\d-\d{2}-\d{6}-\d$/;

            var err = document.getElementById("err-isbn");

            const msg = "The ISBN must follow the following format XXX-X-XX-XXXXXX-X";

            err.innerHTML = "";

            if (isbn.match(regex) == null) {
                err.innerHTML = msg;
            }
        }
    </script>
</body>

</html>