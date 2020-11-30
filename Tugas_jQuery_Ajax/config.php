<?php
    $connect = new PDO("mysql:host=localhost;dbname=cv2", "root", "");

    function select($db) {
        global $connect;

        $result = $connect -> prepare("SELECT * FROM $db");
        $result -> execute();

        return $result;
    }

    function count_select($db) {
        global $connect;

        $result = $connect -> query("SELECT COUNT(*) FROM $db");
        $count = $result -> fetchColumn();

        return $count;
    }

    function insert($nama, $tahun, $tingkat){
        global $connect;

        $result = $connect -> prepare("INSERT INTO academic VALUES (null,?,?,?)");
        $result -> bindParam(1, $nama);
        $result -> bindParam(2, $tahun);
        $result -> bindParam(3, $tingkat);
        $result -> execute();
    }

    function delete($db, $id){
        global $connect;

        $result = $connect -> prepare("DELETE FROM $db WHERE id=?");
        $result -> bindParam(1, $id);
        $result -> execute();
    }
?>
