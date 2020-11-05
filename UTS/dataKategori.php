<?php require 'config.php';

    if(isset($_POST['val'])){
        $val = $_POST['val'];

        if ($val == "insertKategori") {
            $kate = $_POST['kategori'];

            insertKategori($kate);
        } elseif ($val == "updateKategori") {
            $kate = $_POST['kategori'];
            $id = $_POST['id'];

            updateKategori($kate, $id);
        } elseif ($val == "hapusKategori") {
            $id = $_POST['id'];

            delete("kategori", $id);
        } elseif ($val == "view") {
            $result = select("kategori");
            $no = 1;
            while ($row = $result -> fetch()) { ?>
                <tr class="kat-<?= $row['kategori'] ?>">
                    <th scope="row"><?= $no++ ?></th>
                    <td class="kategori"><?= $row['kategori'] ?></td>
                    <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editID-<?= $row['id'] ?>">
                            Edit
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="editID-<?= $row['id'] ?>" tabindex="-1" aria-labelledby="editID-<?= $row['id'] ?>Label" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editID-<?= $row['id'] ?>Label">Edit <?= $row['kategori'] ?></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form>
                                        <div class="modal-body text-left">
                                                <div class="form-group">
                                                    <label for="Kategori-<?= $row['id'] ?>">Kategori</label>
                                                    <input type="text" class="form-control" id="Kategori-<?= $row['id'] ?>" value="<?= $row['kategori'] ?>" required>
                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Tutup</button>
                                            <button type="submit" onclick="updateKategori(<?= $row['id'] ?>)" class="btn btn-outline-info" data-dismiss="modal">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#HapusID-<?= $row['id'] ?>">
                            Hapus
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="HapusID-<?= $row['id'] ?>" tabindex="-1" aria-labelledby="HapusID-<?= $row['id'] ?>Label" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="HapusID-<?= $row['id'] ?>Label">Hapus <?= $row['kategori'] ?></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <?php
                                        $id = $row['id'];
                                        $result2 = count_select("barang", "kategori = $id");
                                    ?>
                                    <div class="modal-body text-left">
                                        Apa anda yakin ?
                                        <?php if ($result2 == 0): ?>
                                            <div class="alert alert-success mt-2" role="alert">
                                                Terdapat <?= $result2 ?> barang, bisa menghapus kategori.
                                            </div>
                                        <?php else: ?>
                                            <div class="alert alert-danger mt-2" role="alert">
                                                Terdapat <?= $result2 ?> barang, tidak bisa menghapus kategori!
                                                <hr>
                                                <i>Pastikan tidak ada barang yang berkategori <span class="font-weight-bold"><?= $row['kategori'] ?></span> sebelum menghapus kategori!</i>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Tidak</button>
                                        <?php if ($result2 == 0): ?>
                                            <button type="button" onclick="hapusKategori(<?= $row['id'] ?>)" class="btn btn-outline-danger" data-dismiss="modal">Ya</button>
                                        <?php else: ?>
                                            <button type="button" class="btn btn-outline-danger" data-dismiss="modal" aria-disabled="true" disabled>Ya</button>
                                        <?php endif; ?>
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
