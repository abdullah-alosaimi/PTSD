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



    <div class="row row-cols-1 row-cols-md-4 g-4 mt-2  ms-5">
        <?php 
            for($i=0; $i < 10; $i++){
                $offer_no = 99;
                $req_no = 22;
                $title = 'Data Base From A to Z';

                include './card.php';
            }
            
            
        ?>
</body>

</html>