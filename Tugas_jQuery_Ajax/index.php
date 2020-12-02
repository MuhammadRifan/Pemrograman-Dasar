<?php include_once 'data.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Rifan</title>
        <link rel="icon" href="assets/icon/hamsa.png">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/style.css">
        <script src="assets/js/jquery-3.5.1.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <div id="home">
            <div class="about_in h3 text-center">
                <span onclick="in_about()">ABOUT</span>
            </div>
            <div class="project_in h3">
                <span onclick="in_project()">PROJECT</span>
            </div>
            <div class="container">
                <div class="text_name">
                    <p class="display-2">
                        <span class="h1">HEY THERE !</span><br>
                        I AM <?= $data['nama'] ?><br>
                    </p>
                    <span class="h5">A FUTURE DEVELOPER (?)</span>
                </div>
            </div>
            <div class="academic_in h3 text-right">
                <span onclick="in_academic()">ACADEMIC</span>
            </div>
            <div class="contact_in h3 text-center">
                <span onclick="in_contact()">CONTACT</span>
            </div>
        </div>

        <div class="frame">
            <div id="about">
                <div class="container">
                    <div class="profile text-center my-5 py-lg-5">
                        <img src="assets/image/profile.jpg">
                    </div>
                    <div class="desc_profile h3 text-center col-8 col-sm-12 mx-auto">
                        <p><?= $data['desc'] ?></p>
                    </div>
                </div>
                <div class="about_out text-center h3">
                    <span onclick="out_about()">⥥&nbsp;&nbsp;&nbsp;BACK&nbsp;&nbsp;&nbsp;⥥</span>
                </div>
            </div>

            <div id="academic">

                <div id="view-aca" class="row">
                    <div class="col-8 mx-auto mt-5 table-responsive">
                        <table class="table table-borderless table-striped table-dark table-hover rounded text-center">
                          <thead>
                            <tr>
                              <th>Tahun</th>
                              <th>Tingkatan</th>
                              <th>Nama</th>
                            </tr>
                          </thead>
                          <tbody id="data-aca">

                          </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">

                    <div id="btn-add-aca" class="col-1 mx-auto">
                        <button class="btn btn-outline-secondary btn-block rounded-pill">＋</button>
                    </div>
                    <form id="form-add-aca" class="col-8 mx-auto mt-1">
                        <div class="form-row">
                            <div class="col-2">
                                <input type="number" id="startyear" class="form-control startyear" placeholder="Start Year" onkeyup="validation()" onclick="validation()">
                                <div class="invalid-feedback">
                                    Mohon masukkan tahun dengan benar
                                </div>
                            </div>
                            <div class="col-2">
                                <input type="number" id="endyear" class="form-control endyear" placeholder="End Year" onkeyup="validation()" onclick="validation()">
                                <div class="invalid-feedback">
                                    Mohon masukkan tahun dengan benar
                                </div>
                            </div>
                            <div class="col">
                                <input type="text" id="tingkat" class="form-control" placeholder="Jenjang Pendidikan" onkeyup="validation()">
                                <div class="invalid-feedback">
                                    Mohon masukkan jenjang dengan benar
                                </div>
                            </div>
                            <div class="col">
                                <input type="text" id="nama" class="form-control" placeholder="Nama Tempat Pendidikan" onkeyup="validation()">
                                <div class="invalid-feedback">
                                    Mohon masukkan nama dengan benar
                                </div>
                            </div>
                            <div class="col-1">
                                <button type="button" id="submit-aca" class="btn btn-outline-danger btn-block">☓</button>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="academic_out text-center h3">
                    <span onclick="out_academic()">⥣&nbsp;&nbsp;&nbsp;BACK&nbsp;&nbsp;&nbsp;⥣</span>
                </div>
            </div>

            <div id="project">
                <div class="container pt-5">

                    <?php $result = select("project");

                    while ($row = $result -> fetch()) { ?>
                        <div class="prow row">
                            <div class="col-5 text-right">
                                <?php if ($row['id'] == 1): ?>
                                    <h3><?= substr($row['nama'], 0, 17) ?><br><?= substr($row['nama'], 18) ?></h3>
                                <?php elseif($row['id'] == 2): ?>
                                    <h3><?= substr($row['nama'], 0, 16) ?><br><?= substr($row['nama'], 17) ?></h3>
                                <?php elseif($row['id'] == 3): ?>
                                    <h3><?= substr($row['nama'], 0, 20) ?><br><?= substr($row['nama'], 21) ?></h1>
                                <?php endif; ?>
                            </div>
                            <div id="project0<?= $row['id'] ?>" class="offset-1 col-5">
                                <img id="imgproject0<?= $row['id'] ?>" width="100%" height="auto" src="assets/image/<?= $row['gambar'] ?>" onmouseover="hover_p0<?= $row['id'] ?>()" onmouseout="hout_p0<?= $row['id'] ?>()">
                            </div>
                        </div>

                    <?php } ?>
                </div>
                <div class="project_out h3 text-center">
                    <span onclick="out_project()">⥣&nbsp;&nbsp;&nbsp;BACK&nbsp;&nbsp;&nbsp;⥣</span>
                </div>
            </div>

            <div id="contact">
                <div class="contact_out h3 text-center">
                    <span onclick="out_contact()">⥣&nbsp;&nbsp;&nbsp;BACK&nbsp;&nbsp;&nbsp;⥣</span>
                </div>
                <div class="ikon mx-auto">
                    <a href="mailto:<?= $data['gmail'] ?>" target="_blank">
                        <img id="ikon_1" src="assets/icon/gmail.png" alt="">
                    </a>
                    <a href="https://github.com/<?= $data['github'] ?>" target="_blank">
                        <img id="ikon_2" src="assets/icon/github.png" alt="">
                    </a>
                    <a href="https://t.me/<?= $data['telegram'] ?>" target="_blank">
                        <img id="ikon_3" src="assets/icon/telegram.png" alt="">
                    </a>
                    <a href="https://www.instagram.com/<?= $data['facegram'] ?>" target="_blank">
                        <img id="ikon_4" src="assets/icon/instagram.png" alt="">
                    </a>
                    <a href="https://twitter.com/<?= $data['twitter'] ?>" target="_blank">
                        <img id="ikon_5" src="assets/icon/twitter.png" alt="">
                    </a>
                    <a href="https://www.facebook.com/<?= $data['facegram'] ?>" target="_blank">
                        <img id="ikon_6" src="assets/icon/facebook.png" alt="">
                    </a>
                </div>
                <div class="ikon_kiri" onclick="checkTime(1)"></div>
                <div class="ikon_kanan" onclick="checkTime(0)"></div>
            </div>
        </div>

        <script type="text/javascript">
            var y = new Date().getFullYear();

            $(document).ready(function() {
                countData();

                $("#startyear").attr("min", y-40).attr("max", y+40).val("");
                $("#endyear").attr("min", y).attr("max", y+40).val("");

                $("#btn-add-aca").on("click", function () {
                    $(this).hide("fast", function () {
                        $("#form-add-aca").show("fast");
                    });
                })

                $("#submit-aca").on("click", function () {
                    $("#form-add-aca").hide("fast", function () {
                        if ($("#submit-aca").html() == "✓") {
                            insert();
                        }
                        countData();
                    })
                })

                view();
            });

            function validation() {
                var nama = $("#nama");
                var tingkat = $("#tingkat");
                var tahunawal = $("#startyear");
                var tahunakhir = $("#endyear");
                var regex = /[0-9]/;

                if (nama.val().length == 0) {
                    nama.addClass('is-invalid').removeClass('is-valid');
                } else {
                    nama.addClass('is-valid').removeClass('is-invalid');
                }

                if (tingkat.val().length == 0) {
                    tingkat.addClass('is-invalid').removeClass('is-valid');
                } else {
                    tingkat.addClass('is-valid').removeClass('is-invalid');
                }

                if (regex.test(tahunawal.val())) {
                    if (tahunawal.val().length == 4) {
                        tahunawal.addClass('is-valid').removeClass('is-invalid');
                    } else {
                        tahunawal.addClass('is-invalid').removeClass('is-valid');
                    }
                    tahunakhir.attr("min", tahunawal.val());
                    tahunakhir.attr("max", tahunawal.val() + 40);
                } else {
                    tahunawal.addClass('is-invalid').removeClass('is-valid');
                }

                if (regex.test(tahunakhir.val())) {
                    if (tahunakhir.val().length == 4) {
                        if (tahunakhir.val() >= tahunawal.val()) {
                            tahunakhir.addClass('is-valid').removeClass('is-invalid');
                        } else {
                            tahunakhir.addClass('is-invalid').removeClass('is-valid');
                        }
                    } else {
                        tahunakhir.addClass('is-invalid').removeClass('is-valid');
                    }
                } else {
                    tahunakhir.addClass('is-invalid').removeClass('is-valid');
                }

                if ($("#nama").hasClass("is-valid") &&
                    $("#tingkat").hasClass("is-valid") &&
                    $("#startyear").hasClass("is-valid") &&
                    $("#endyear").hasClass("is-valid"))
                {
                    $("#submit-aca").html("✓")
                                    .addClass("btn-outline-success")
                                    .removeClass("btn-outline-danger");
                } else {
                    $("#submit-aca").html("☓")
                                    .addClass("btn-outline-danger")
                                    .removeClass("btn-outline-success");
                }
            }

            function view() {
                $.ajax({
                    type: "POST",
                    url: "data.php",
                    data: "val=view",
                    success: function(data){
                        $("#data-aca").html(data);
                    }
                })
            }

            function insert() {
                var nama = $("#nama").val();
                var tingkat = $("#tingkat").val();
                var tahun = $("#startyear").val() + " - " + $("#endyear").val();

                $.ajax({
                    type: "POST",
                    url: "data.php",
                    data: "val=insert&nama=" + nama + "&tingkat=" + tingkat + "&tahun=" + tahun,
                    success: function(data){
                        $("#nama").val("").removeClass("is-valid");
                        $("#tingkat").val("").removeClass("is-valid");
                        $("#startyear").val("").removeClass("is-valid");
                        $("#endyear").val("").removeClass("is-valid");
                        $("#submit-aca").html("☓")
                                        .addClass("btn-outline-danger")
                                        .removeClass("btn-outline-success");
                        $("#startyear").val("");
                        $("#endyear").val("");
                        view();
                    }
                })
            }

            function hapus(id){
                $.ajax({
                    type: "POST",
                    url: "data.php",
                    data: "val=hapus&id=" + id,
                    success: function(data){
                        view();
                        $("#form-add-aca").hide();
                        countData();
                    }
                })
            }

            function countData() {
                $.ajax({
                    type: "POST",
                    url: "data.php",
                    data: "val=count",
                    success: function(data){
                        if (data < 7) {
                            $("#btn-add-aca").show();
                        } else {
                            $("#btn-add-aca").hide();
                        }
                    }
                })
            }

            function in_about() {
                $('#about').css("top", 0);
            }

            function out_about() {
                $('#about').css("top", "-100%");
            }

            function in_academic() {
                $('#academic').css("right", 0);
            }

            function out_academic() {
                $('#academic').css("right", "-100%");
                $("#form-add-aca").hide("fast", function () {
                    $("#btn-add-aca").show("fast");
                })
            }

            function in_project() {
                $('#project').css("left", 0);
            }

            function out_project() {
                $('#project').css("left", "-100%");
            }

            function in_contact() {
                $('#contact').css("bottom", 0);
            }

            function out_contact() {
                $('#contact').css("bottom", "-100%");
            }

            var wait = 0;
            async function checkTime(dir) {
                if (wait == 0) {
                    changeicon(dir);
                    wait = 1;
                    await new Promise(s => setTimeout(s, 500));
                    wait = 0;
                }

            }

            var pos = 1;
            function changeicon(dir) {
                // 0 = right, 1 = left
                if (dir == 0) {
                    if (pos == 6) {
                        pos = 1;
                    } else {
                        pos ++;
                    }
                } else {
                    if (pos == 1) {
                        pos = 6;
                    } else {
                        pos --;
                    }
                }

                if (pos == 1) {
                    $("#ikon_1").css("transform", "translate(0px, 0px)");
                    $("#ikon_2").css("transform", "translate(100px, 0px)");
                    $("#ikon_3").css("transform", "translate(100px, 100px)");
                    $("#ikon_4").css("transform", "translate(0px, 100px)");
                    $("#ikon_5").css("transform", "translate(-100px, 100px)");
                    $("#ikon_6").css("transform", "translate(-100px, 0px)");

                    $("#contact").css("background", "#f44336");
                } else if (pos == 2) {
                    $("#ikon_2").css("transform", "translate(0px, 0px)");
                    $("#ikon_3").css("transform", "translate(100px, 0px)");
                    $("#ikon_4").css("transform", "translate(100px, 100px)");
                    $("#ikon_5").css("transform", "translate(0px, 100px)");
                    $("#ikon_6").css("transform", "translate(-100px, 100px)");
                    $("#ikon_1").css("transform", "translate(-100px, 0px)");

                    $("#contact").css("background", "#5c6bc0");
                } else if (pos == 3) {
                    $("#ikon_3").css("transform", "translate(0px, 0px)");
                    $("#ikon_4").css("transform", "translate(100px, 0px)");
                    $("#ikon_5").css("transform", "translate(100px, 100px)");
                    $("#ikon_6").css("transform", "translate(0px, 100px)");
                    $("#ikon_1").css("transform", "translate(-100px, 100px)");
                    $("#ikon_2").css("transform", "translate(-100px, 0px)");

                    $("#contact").css("background", "#039be5");
                } else if (pos == 4) {
                    $("#ikon_4").css("transform", "translate(0px, 0px)");
                    $("#ikon_5").css("transform", "translate(100px, 0px)");
                    $("#ikon_6").css("transform", "translate(100px, 100px)");
                    $("#ikon_1").css("transform", "translate(0px, 100px)");
                    $("#ikon_2").css("transform", "translate(-100px, 100px)");
                    $("#ikon_3").css("transform", "translate(-100px, 0px)");

                    $("#contact").css("background", "#ef4b5e");
                } else if (pos == 5) {
                    $("#ikon_5").css("transform", "translate(0px, 0px)");
                    $("#ikon_6").css("transform", "translate(100px, 0px)");
                    $("#ikon_1").css("transform", "translate(100px, 100px)");
                    $("#ikon_2").css("transform", "translate(0px, 100px)");
                    $("#ikon_3").css("transform", "translate(-100px, 100px)");
                    $("#ikon_4").css("transform", "translate(-100px, 0px)");

                    $("#contact").css("background", "#1da1f3");
                } else if (pos == 6) {
                    $("#ikon_6").css("transform", "translate(0px, 0px)");
                    $("#ikon_1").css("transform", "translate(100px, 0px)");
                    $("#ikon_2").css("transform", "translate(100px, 100px)");
                    $("#ikon_3").css("transform", "translate(0px, 100px)");
                    $("#ikon_4").css("transform", "translate(-100px, 100px)");
                    $("#ikon_5").css("transform", "translate(-100px, 0px)");

                    $("#contact").css("background", "#1976d2");
                }
            }

            function hover_p01() {
                $("#project01").css("zIndex", "2");
                $("#imgproject01").css("width", "800px");
                $("#imgproject01").css("height", "450px");
                $("#imgproject01").css("transform", "translate(-60%, 0%)");
            }

            function hout_p01() {
                $("#project01").css("zIndex", "0");
                $("#imgproject01").css("width", "340px");
                $("#imgproject01").css("height", "150px");
                $("#imgproject01").css("transform", "translate(0, 0)");
            }

            function hover_p02() {
                $("#project02").css("zIndex", "2");
                $("#imgproject02").css("width", "800px");
                $("#imgproject02").css("height", "600px");
                $("#imgproject02").css("transform", "translate(-60%, -40%)");
            }

            function hout_p02() {
                $("#project02").css("zIndex", "0");
                $("#imgproject02").css("width", "340px");
                $("#imgproject02").css("height", "150px");
                $("#imgproject02").css("transform", "translate(0, 0)");
            }

            function hover_p03() {
                $("#project03").css("zIndex", "2");
                $("#imgproject03").css("width", "800px");
                $("#imgproject03").css("height", "470px");
                $("#imgproject03").css("transform", "translate(-60%, -70%)");
            }

            function hout_p03() {
                $("#project03").css("zIndex", "0");
                $("#imgproject03").css("width", "340px");
                $("#imgproject03").css("height", "150px");
                $("#imgproject03").css("transform", "translate(0, 0)");
            }
        </script>
    </body>
</html>
