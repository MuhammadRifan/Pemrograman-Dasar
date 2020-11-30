<?php
    require 'config.php';

    $data = [
        'nama' => "MUHAMMAD RIF'AN",
        'desc' => "A boy from a small family yet has a big dream. Even though I'm a lazy person, I always do something with full effort. I study computer science to learn how to make a game but after 3 years or something, I still didn't know to make a game. Poor me... but in those years I'm learning the other things like how to make websites and mobile apps. Learning how to code in java, js, PHP, Delphi, and C++.",
        'gmail' => "muhammadrifan153@gmail.com",
        'github' => "MuhammadRifan",
        'telegram' => "Rifaann",
        'facegram' => "mrifandz",
        'twitter' => "futuredeadsoul"
    ];

    if(isset($_POST['val'])){
        $val = $_POST['val'];

        if ($val == "insert") {
            $nama = $_POST['nama'];
            $tingkat = $_POST['tingkat'];
            $tahun = $_POST['tahun'];

            insert($nama, $tahun, $tingkat);
        } else if ($val == "hapus") {
            $id = $_POST['id'];

            delete("academic", $id);
        } else if ($val == "count") {
            $count = count_select("academic");
            echo $count;
        } else if ($val == "view") {
            $result = select("academic");
            while ($row = $result -> fetch()) { ?>
                <tr>
                  <td><?= $row['tahun'] ?></td>
                  <td><?= $row['tingkat'] ?></td>
                  <td><?= $row['nama'] ?></td>
                  <td><button type="submit" class="btn btn-outline-light btn-sm" onclick="hapus(<?= $row['id'] ?>)">☓</button></td>
                </tr>
            <?php }
        }
    }

?>
