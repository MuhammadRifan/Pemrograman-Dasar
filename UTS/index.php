<?php include_once 'template/header.php'; ?>

<div class="container mt-3">
    <div class="input-group mb-3 inline">
        <button type="button" class="btn btn-outline-success btn-sm col-1 mr-2" data-toggle="modal" data-target="#Tambah">
            Tambah
        </button>
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Filter Harga</span>
        </div>
        <input type="text" id="hmin" class="form-control" placeholder="Harga Min" aria-describedby="basic-addon1" pattern="^[0-9]*$" onkeyup="view()">
        <input type="text" id="hmax" class="form-control" placeholder="Harga Max" pattern="^[0-9]*$" onkeyup="view()">
    </div>

    <table class="table table-hover text-center">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">SKU</th>
                <th scope="col">Nama</th>
                <th scope="col">Kategori</th>
                <th scope="col">Stok</th>
                <th scope="col">Harga</th>
                <th scope="col" colspan="2"></th>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="Tambah" tabindex="-1" aria-labelledby="Tambah" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Tambah">Tambah Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form>
                <div class="modal-body text-left">
                    <div class="form-group">
                        <label for="SKU">SKU</label>
                        <input type="text" class="form-control" id="SKU" required>
                    </div>
                    <div class="form-group">
                        <label for="NamaBarang">Nama Barang</label>
                        <input type="text" class="form-control" id="NamaBarang" required>
                    </div>
                    <div class="form-group">
                        <label for="kate">Kategori</label>
                        <select id="kate" class="form-control" required>
                            <option value="">Pilih</option>
                            <?php $result2 = select("kategori");
                            while ($row2 = $result2 -> fetch()) { ?>
                                    <option value="<?= $row2['id'] ?>"><?= $row2['kategori'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Stok">Stok</label>
                        <input type="text" class="form-control" id="Stok" required>
                    </div>
                    <div class="form-group">
                        <label for="Harga">Harga</label>
                        <input type="text" class="form-control" id="Harga" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" onclick="insertBarang()" class="btn btn-outline-info" data-dismiss="modal">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript">
    function view() {
        kate = $("#kategori").val();
        val = $("#search").val();
        min = $("#hmin").val();
        max = $("#hmax").val();

        $.ajax({
            type: "POST",
            url: "data.php",
            data: "val=view&kat=" + kate + "&value=" + val + "&min=" + min + "&max=" + max,
            success: function(data){
                $("tbody").html(data);
            }
        })
    }

    function insertBarang() {
        var sku = $("#SKU").val();
        var nama = $("#NamaBarang").val();
        var kategori = $("#kate").val();
        var stok = $("#Stok").val();
        var harga = $("#Harga").val();
        $.ajax({
            type: "POST",
            url: "data.php",
            data: "val=insertBarang&sku=" + sku + "&nama=" + nama + "&kategori=" + kategori + "&stok=" + stok + "&harga=" + harga,
            success: function(data){
                alert("Tambah Berhasil");
                view();
            }
        })
    }

    function updateBarang(id){
        var sku = $("#SKU-"+id).val();
        var nama = $("#NamaBarang-"+id).val();
        var kategori = $("#kate-"+id).val();
        var stok = $("#Stok-"+id).val();
        var harga = $("#Harga-"+id).val();
        $.ajax({
            type: "POST",
            url: "data.php",
            data: "val=updateBarang&sku=" + sku + "&nama=" + nama + "&kategori=" + kategori + "&stok=" + stok + "&harga=" + harga + "&id=" + id,
            success: function(data){
                alert("Edit Berhasil");
                view();
            }
        })
    }

    function hapusBarang(id){
        $.ajax({
            type: "POST",
            url: "data.php",
            data: "val=hapusBarang&id=" + id,
            success: function(data){
                alert("Hapus Berhasil");
                view();
            }
        })
    }
</script>

<?php include_once 'template/footer.php'; ?>
