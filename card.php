<div class="col">
    <div class="card shadow" style="width: 18rem;">
        <img src="<?php echo $url ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php echo $title ?></h5>
            <p class="card-text">Number of Offers: [<?php echo $offer_no ?>] <br> Number of requests: [<?php echo $req_no ?>] </p>
            <form action="" method="post">
                <input type="hidden" id="bookid" name="bookid" class="none" value="<?php echo $id ?>">
                <button type="submit" class="btn btn-primary">Request the book</button>
            </form>
            
        </div>
    </div>
</div>