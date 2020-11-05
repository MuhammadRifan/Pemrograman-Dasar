<?php include_once 'template/header.php';?>

<div class="container mt-3">
    <table class="table table-hover text-center">
        <thead class="thead-dark">
            <tr>
                <th scope="col" class="align-middle">#</th>
                <th scope="col" class="align-middle">Kategori</th>
                <th scope="col" colspan="2">
                    <button type="button" class="btn btn-outline-success btn-sm col-2 m-0" data-toggle="modal" data-target="#Tambah">
                        Tambah
                    </button>
                </th>
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
                <h5 class="modal-title" id="Tambah">Tambah Kategori</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form>
                <div class="modal-body text-left">
                    <div class="form-group">
                        <label for="Kategori">Kategori</label>
                        <input type="text" class="form-control" id="Kategori" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" onclick="insertKategori()" class="btn btn-outline-info" data-dismiss="modal">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript">
    function view() {
        $.ajax({
            type: "POST",
            url: "dataKategori.php",
            data: "val=view",
            success: function(data){
                $("tbody").html(data);
            }
        })
    }

    function insertKategori() {
        kategori = $("#Kategori").val();

        $.ajax({
            type: "POST",
            url: "dataKategori.php",
            data: "val=insertKategori&kategori=" + kategori,
            success: function(data){
                alert("Tambah Berhasil");
                view();
            }
        })
    }

    function updateKategori(id){
        kategori = $("#Kategori-"+id).val();

        $.ajax({
            type: "POST",
            url: "dataKategori.php",
            data: "val=updateKategori&kategori=" + kategori + "&id=" + id,
            success: function(data){
                alert("Edit Berhasil");
                view();
            }
        })
    }

    function hapusKategori(id){
        $.ajax({
            type: "POST",
            url: "dataKategori.php",
            data: "val=hapusKategori&id=" + id,
            success: function(data){
                alert("Hapus Berhasil");
                view();
            }
        })
    }
</script>

<?php include_once 'template/footer.php';?>
