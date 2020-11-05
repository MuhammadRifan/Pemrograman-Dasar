<?php require 'config.php';?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Barokah Mart</title>
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <script src="assets/js/jquery-3.5.1.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
    </head>
    <body onload="view()">

        <nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark">
            <a class="navbar-brand" href="">Barokah Mart</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <?php if (substr($_SERVER["REQUEST_URI"], 12) == "index.php"): ?>
                        <li class="nav-item active"><a class="nav-link" href="index.php">Barang</a></li>
                        <li class="nav-item"><a class="nav-link" href="kategori.php">Kategori</a></li>
                    <?php else: ?>
                        <li class="nav-item"><a class="nav-link" href="index.php">Barang</a></li>
                        <li class="nav-item active"><a class="nav-link" href="kategori.php">Kategori</a></li>
                    <?php endif; ?>
                </ul>
                <?php if (substr($_SERVER["REQUEST_URI"], 12) == "index.php"): ?>
                    <span class="navbar-text">
                      Pencarian
                    </span>
                    <div class="input-group input-group-sm col-3">
                        <select class="form-control" id="kategori" onchange="view()">
                            <option value="">Semua</option>
                            <?php $result = select("kategori");
                                while ($row = $result -> fetch()) { ?>
                                <option value="<?= $row['id'] ?>"><?= $row['kategori'] ?></option>
                                <script> totalkat = <?= $row['id']?> </script>
                            <?php } ?>
                        </select>
                        <input type="text" class="form-control" id="search" onkeyup="view()" placeholder="Nama / SKU">
                    </div>
                <?php endif; ?>
            </div>
        </nav>
