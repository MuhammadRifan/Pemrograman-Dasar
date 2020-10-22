<?php include_once 'config.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Rifan</title>
        <link rel="icon" href="assets/icon/hamsa.png">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/960_16_col.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" charset="utf-8"></script>
    </head>
    <body>
        <div id="home">
            <div class="container_16">
                <div class="about_in push_5 grid_6" onclick="in_about()">
                    <h2>ABOUT</h2>
                </div>
                <div class="clear"></div>
                <div class="grid_16">
                    <div class="text_name">
                        <h1><span>HEY THERE !</span><br>
                            I AM <?= $data['nama'] ?><br>
                        </h1>
                        <span>A FUTURE DEVELOPER (?)</span>
                    </div>
                </div>
                <div class="contact_in push_5 grid_6" onclick="in_contact()">
                    <h2>CONTACT</h2>
                </div>
            </div>
            <div class="academic_in grid_6" onclick="in_academic()">
                <h2>ACADEMIC</h2>
            </div>
            <div class="project_in grid_6" onclick="in_project()">
                <h2>PROJECT</h2>
            </div>
        </div>

        <div class="frame">
            <div id="about">
                <div class="container_16">
                    <div class="profile push_6 grid_4">
                        <img src="assets/image/profile.jpg">
                    </div>
                    <div class="clear"></div>
                    <div class="desc_profile push_2 grid_12">
                        <p><?= $data['desc'] ?></p>
                    </div>
                    <div class="about_out push_5 grid_6" onclick="out_about()">
                        <h2>BACK</h2>
                    </div>
                </div>
                <div class="bg_about_out"></div>
            </div>
            <!-- ------------------------------------------- -->
            <div id="academic">
                <div class="container_16">
                    <?php $result = select("academic");

                        while ($row = $result -> fetch()) { ?>

                            <div class="erow push_3 grid_12">
                                <div class="grid_3">
                                    <img src="assets/image/<?= $row['gambar'] ?>" alt="">
                                </div>
                                <div class="push_2 grid_7">
                                    <h1>
                                        <span><?= $row['tahun'] ?></span><br>
                                        <?= $row['nama'] ?><br>
                                        <span>( <?= $row['jenis'] ?> )</span>
                                    </h1>
                                </div>
                            </div>
                            <div class="clear"></div>

                    <?php } ?>
                </div>
                <div class="bg_academic_out"></div>
                <div class="academic_out push_5 grid_6" onclick="out_academic()">
                    <h2>BACK</h2>
                </div>
            </div>
            <!-- ------------------------------------------- -->
            <div id="project">
                <div class="container_16">

                    <?php $result = select("project");

                        while ($row = $result -> fetch()) { ?>
                            <div class="prow grid_16">
                                <div class="grid_7">
                                    <?php if ($row['id'] == 1): ?>
                                        <h1><?= substr($row['nama'], 0, 17) ?><br><?= substr($row['nama'], 18) ?></h1>
                                    <?php elseif($row['id'] == 2): ?>
                                        <h1><?= substr($row['nama'], 0, 16) ?><br><?= substr($row['nama'], 17) ?></h1>
                                    <?php elseif($row['id'] == 3): ?>
                                        <h1><?= substr($row['nama'], 0, 20) ?><br><?= substr($row['nama'], 21) ?></h1>
                                    <?php endif; ?>
                                </div>
                                <div id="project0<?= $row['id'] ?>" class="push_1 grid_6">
                                    <img id="imgproject0<?= $row['id'] ?>" width="100%" height="auto" src="assets/image/<?= $row['gambar'] ?>" alt="" onmouseover="hover_p0<?= $row['id'] ?>()" onmouseout="hout_p0<?= $row['id'] ?>()">
                                </div>
                            </div>

                    <?php } ?>
                </div>
                <div class="bg_project_out"></div>
                <div class="project_out push_5 grid_6" onclick="out_project()">
                    <h2>BACK</h2>
                </div>
            </div>
            <!-- ------------------------------------------- -->
            <div id="contact">
                <div class="container_16">
                    <div class="contact_out push_5 grid_6" onclick="out_contact()">
                        <h2>BACK</h2>
                    </div>
                    <div class="clear"></div>
                    <div class="ikon push_7 grid_2">
                        <a href="mailto:<?= $data['gmail'] ?>" target="_blank"><img id="ikon_1" src="assets/icon/gmail.png" alt=""></a>
                        <a href="https://github.com/<?= $data['github'] ?>" target="_blank"><img id="ikon_2" src="assets/icon/github.png" alt=""></a>
                        <a href="https://t.me/<?= $data['telegram'] ?>" target="_blank"><img id="ikon_3" src="assets/icon/telegram.png" alt=""></a>
                        <a href="https://www.instagram.com/<?= $data['facegram'] ?>" target="_blank"><img id="ikon_4" src="assets/icon/instagram.png" alt=""></a>
                        <a href="https://twitter.com/<?= $data['twitter'] ?>" target="_blank"><img id="ikon_5" src="assets/icon/twitter.png" alt=""></a>
                        <a href="https://www.facebook.com/<?= $data['facegram'] ?>" target="_blank"><img id="ikon_6" src="assets/icon/facebook.png" alt=""></a>
                    </div>
                </div>
                <div class="bg_contact_out"></div>
                <div class="ikon_kiri" onclick="changeicon(1)"></div>
                <div class="ikon_kanan" onclick="changeicon(0)"></div>
            </div>
        </div>

        <script type="text/javascript">
            var pos = 1;

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
                $("#imgproject01").css("transform", "translate(-50%, 10%)");
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
                $("#imgproject02").css("transform", "translate(-50%, -40%)");
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
                $("#imgproject03").css("transform", "translate(-50%, -70%)");
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
