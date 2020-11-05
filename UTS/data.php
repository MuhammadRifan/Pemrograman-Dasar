<?php require 'config.php';

if(isset($_POST['val'])){
    $val = $_POST['val'];

    if ($val == "insertBarang") {
        $sku = $_POST['sku'];
        $nama = $_POST['nama'];
        $kate = $_POST['kategori'];
        $stok = $_POST['stok'];
        $harga = $_POST['harga'];

        insertBarang($sku, $nama, $kate, $stok, $harga);
    } elseif ($val == "updateBarang") {
        $sku = $_POST['sku'];
        $nama = $_POST['nama'];
        $kate = $_POST['kategori'];
        $stok = $_POST['stok'];
        $harga = $_POST['harga'];
        $id = $_POST['id'];

        updateBarang($sku, $nama, $kate, $stok, $harga, $id);
    } elseif ($val == "hapusBarang") {
        $id = $_POST['id'];

        delete("barang", $id);
    } elseif ($val == "view") {
        $kate = $_POST['kat'];
        $value = $_POST['value'];
        $min = $_POST['min'];
        $max = $_POST['max'];

        $sql = "";
        $totalSql = 0;

        if ($value != "") {
            $sql .= "(nama LIKE '%".$value."%' OR sku LIKE '%".$value."%')";
            $totalSql ++;
        }

        if ($kate != "") {
            if ($totalSql == 1) {
                $sql .= " AND kategori = $kate";
            } else {
                $sql .= "kategori = $kate";
            }
            $totalSql++;
        }


        if ($min != "" && $max != "") {
            if ($totalSql >= 1) {
                $sql .= " AND harga BETWEEN ".$min." AND ".$max;
            } else {
                $sql .= "harga BETWEEN ".$min." AND ".$max;
            }

        }

        if ($value == "" && $kate == "" && $min == "" && $max == "") {
            $result = select("barang");
        } else {
            $result = select_where("barang", $sql);
        }

        $no = 1;
        while ($row = $result -> fetch()) { ?>

            <tr class="kat-<?= $row['kategori'] ?>">
                <th><?= $no++ ?></th>
                <th><?= $row['sku'] ?></th>
                <td><?= $row['nama'] ?></td>
                <td class="kategori"><?php $result2 = select("kategori");

                while ($row2 = $result2 -> fetch()) { ?>
                    <?= ($row['kategori'] == $row2['id']) ? $row2['kategori'] :"" ?>
                <?php } ?></td>

                <td><?= $row['stok'] ?></td>
                <td><?= $row['harga'] ?></td>
                <td><button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#editID-<?= $row['id'] ?>">
                        Edit
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="editID-<?= $row['id'] ?>" tabindex="-1" aria-labelledby="editID-<?= $row['id'] ?>Label" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editID-<?= $row['id'] ?>Label">Edit <?= $row['nama'] ?></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form>
                                    <div class="modal-body text-left">
                                            <div class="form-group">
                                                <label for="SKU-<?= $row['id'] ?>">SKU</label>
                                                <input type="text" class="form-control" id="SKU-<?= $row['id'] ?>" value="<?= $row['sku'] ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="NamaBarang-<?= $row['id'] ?>">Nama Barang</label>
                                                <input type="text" class="form-control" id="NamaBarang-<?= $row['id'] ?>" value="<?= $row['nama'] ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="kate-<?= $row['id'] ?>">Kategori</label>
                                                <select id="kate-<?= $row['id'] ?>" class="form-control">
                                                    <?php $result2 = select("kategori");
                                                    while ($row2 = $result2 -> fetch()) { ?>
                                                        <option value="<?= $row2['id'] ?>" <?= ($row['kategori'] == $row2['id']) ? "selected" : "" ?>><?= $row2['kategori'] ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="Stok-<?= $row['id'] ?>">Stok</label>
                                                <input type="text" class="form-control" id="Stok-<?= $row['id'] ?>" value="<?= $row['stok'] ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="Harga-<?= $row['id'] ?>">Harga</label>
                                                <input type="text" class="form-control" id="Harga-<?= $row['id'] ?>" value="<?= $row['harga'] ?>" required>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Tutup</button>
                                        <button type="submit" onclick="updateBarang(<?= $row['id'] ?>)" class="btn btn-outline-info" data-dismiss="modal">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </td>
                <td><button type="button" class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#HapusID-<?= $row['id'] ?>">
                        Hapus
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="HapusID-<?= $row['id'] ?>" tabindex="-1" aria-labelledby="HapusID-<?= $row['id'] ?>Label" aria-hidden="true">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="HapusID-<?= $row['id'] ?>Label">Hapus <?= $row['nama'] ?></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body text-left">
                                    Apa anda yakin ?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Tidak</button>
                                    <button type="button" onclick="hapusBarang(<?= $row['id'] ?>)" class="btn btn-outline-danger" data-dismiss="modal">Ya</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>

        <?php }
    }
}

?>
