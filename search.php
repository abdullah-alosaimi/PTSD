<?php include 'init.php'; ?>
    <?php  include './db.php'; ?>
    <?php  include './header.php'; ?>



    <div class="row row-cols-1 row-cols-md-4 g-4 mt-2  ms-5">
        <?php 
            $search = $_GET['search'];
            $sql = "SELECT * FROM `books` WHERE
            isbn LIKE '%$search%' OR
            title LIKE '%$search%'
            ORDER BY id ASC";
            $result = mysqli_query($db, $sql);

            $number = mysqli_num_rows($result);
            

            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                $id = $row["id"];
                $title = $row["isbn"];
                $url = $row["img"];

                $offer_no = 99;
                $req_no = 22;

                include './card.php';
            }
            
            
        ?>
</body>

</html>