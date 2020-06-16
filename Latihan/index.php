<?php

$data = file_get_contents('menu.json');
$menu = json_decode($data, true);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warung Enak</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-danger bg-danger">
        <a class="navbar-brand">Warung Enak</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-brand" style="color:black;" href="#">Menu</a>

            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row mt-3">
            <div class="col pb-5">
                <h2 class="text-center">All Menu Raski Store</h2>
            </div>
        </div>
        <div class="row mt-3">
            <?php foreach ($menu as $m) : ?>
                <div class="col-md-4 pb-5">
                    <div class="card">
                        <img src="assets/img/<?= $m['gambar']; ?>" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title"><?= $m['nama']; ?></h5>
                            <p class="card-text">Rp <?= $m['harga']; ?></p>
                            <a href="#" class="btn btn-primary">Beli</a>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>

    </div>
    <footer>
        <div class="col text-center">

            <i class="fa fa-copyright" aria-hidden="true">Copyright by Raras Muftining Dectina, 2020</i>
        </div>
    </footer>


</body>

<script src="assets/css/jquery-3.5.1.min.js"></script>
<script src="assets/css/bootstrap.min.js"></script>

</html>