<?php include 'init.php' ?>
    <?php  include './db.php'; ?>
    <?php  include './header.php'; ?>



    <div class="row row-cols-1 row-cols-md-4 g-4 mt-2  ms-5">
        <?php 
            

            for($i=0; $i < 10; $i++){
                $url = './img/java-how-to.png';
                $offer_no = 99;
                $req_no = 22;
                $title = 'Data Base From A to Z';

                include './card.php';
            }
            
            
        ?>
</body>

</html>