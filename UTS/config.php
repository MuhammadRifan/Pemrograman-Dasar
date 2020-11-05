<?php
    $connect = new PDO("mysql:host=localhost;dbname=pemweb_minimart", "root", "");

    function select($db) {
        global $connect;

        $result = $connect -> prepare("SELECT * FROM $db");
        $result -> execute();

        return $result;
    }

    function select_where($db, $sql)
    {
        global $connect;

        $result = $connect -> prepare("SELECT * FROM $db WHERE $sql");
        $result -> execute();

        return $result;
    }

    function count_select($db, $sql) {
        global $connect;

        $result = $connect -> query("SELECT COUNT(*) FROM $db WHERE $sql");
        $count = $result -> fetchColumn();

        return $count;
    }

    function insertBarang($sku, $nama, $kategori, $stok, $harga){
        global $connect;

        $result = $connect -> prepare("INSERT INTO barang VALUES (null,?,?,?,?,?)");
        $result -> bindParam(1, $sku);
        $result -> bindParam(2, $nama);
        $result -> bindParam(3, $kategori);
        $result -> bindParam(4, $stok);
        $result -> bindParam(5, $harga);
        $result -> execute();
    }

    function updateBarang($sku, $nama, $kategori, $stok, $harga, $id){
        global $connect;

        $result = $connect -> prepare("UPDATE barang SET sku=?, nama=?, kategori=?, stok=?, harga=? WHERE id=?");
        $result -> bindParam(1, $sku);
        $result -> bindParam(2, $nama);
        $result -> bindParam(3, $kategori);
        $result -> bindParam(4, $stok);
        $result -> bindParam(5, $harga);
        $result -> bindParam(6, $id);
        $result -> execute();
    }

    function insertKategori($kategori){
        global $connect;

        $result = $connect -> prepare("INSERT INTO kategori VALUES (null,?)");
        $result -> bindParam(1, $kategori);
        $result -> execute();
    }

    function updateKategori($kategori, $id){
        global $connect;

        $result = $connect -> prepare("UPDATE kategori SET kategori=? WHERE id=?");
        $result -> bindParam(1, $kategori);
        $result -> bindParam(2, $id);
        $result -> execute();
    }

    function delete($db, $id){
        global $connect;

        $result = $connect -> prepare("DELETE FROM $db WHERE id=?");
        $result -> bindParam(1, $id);
        $result -> execute();
    }
?>
