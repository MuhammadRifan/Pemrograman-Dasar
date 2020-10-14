<?php require_once 'data.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Muhammad Rif'an D</title>
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/960_16_col.css">
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
                    <div class="erow push_3 grid_12">
                        <div class="grid_3">
                            <img src="assets/image/sd.png" alt="">
                        </div>
                        <div class="push_2 grid_7">
                            <h1>
                                <span>2006 - 2012</span><br>
                                <?= $data['school1'] ?><br>
                                <span>( Elementary School )</span>
                            </h1>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="erow push_3 grid_12">
                        <div class="grid_3">
                            <img src="assets/image/smp.png" alt="">
                        </div>
                        <div class="push_2 grid_7">
                            <h1>
                                <span>2012 - 2015</span><br>
                                <?= $data['school2'] ?><br>
                                <span>( Junior High School )</span>
                            </h1>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="erow push_3 grid_12">
                        <div class="grid_3">
                            <img src="assets/image/smk.png" alt="">
                        </div>
                        <div class="push_2 grid_7">
                            <h1>
                                <span>2015 - 2018</span><br>
                                <?= $data['school3'] ?><br>
                                <span>( Vocational High School )</span>
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="bg_academic_out"></div>
                <div class="academic_out push_5 grid_6" onclick="out_academic()">
                    <h2>BACK</h2>
                </div>
            </div>
            <!-- ------------------------------------------- -->
            <div id="project">
                <div class="container_16">
                    <div class="prow grid_16">
                        <div class="grid_7">
                            <h1><?= substr($data['project1'], 0, 17) ?><br><?= substr($data['project1'], 18) ?></h1>
                        </div>
                        <div id="project01" class="push_1 grid_6">
                            <img id="imgproject01" width="100%" height="auto" src="assets/image/project01.png" alt="" onmouseover="hover_p01()" onmouseout="hout_p01()">
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="prow grid_16">
                        <div class="grid_7">
                            <h1><?= substr($data['project2'], 0, 16) ?><br><?= substr($data['project2'], 17) ?></h1>
                        </div>
                        <div id="project02" class="push_1 grid_6">
                            <img id="imgproject02" width="100%" height="auto" src="assets/image/project02.png" alt="" onmouseover="hover_p02()" onmouseout="hout_p02()">
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="prow grid_16">
                        <div class="grid_7">
                            <h1><?= substr($data['project3'], 0, 20) ?><br><?= substr($data['project3'], 21) ?></h1>
                        </div>
                        <div id="project03" class="push_1 grid_6">
                            <img id="imgproject03" width="100%" height="auto" src="assets/image/project03.png" alt="" onmouseover="hover_p03()" onmouseout="hout_p03()">
                        </div>
                    </div>
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
                document.getElementById('about').style.top = 0;
            }

            function out_about() {
                document.getElementById('about').style.top = "-100%";
            }

            function in_academic() {
                document.getElementById('academic').style.right = 0;
            }

            function out_academic() {
                document.getElementById('academic').style.right = "-100%";
            }

            function in_project() {
                document.getElementById('project').style.left = 0;
            }

            function out_project() {
                document.getElementById('project').style.left = "-100%";
            }

            function in_contact() {
                document.getElementById('contact').style.bottom = 0;
            }

            function out_contact() {
                document.getElementById('contact').style.bottom = "-100%";
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
                    document.getElementById("ikon_1").style.transform = "translate(0px, 0px)";
                    document.getElementById("ikon_2").style.transform = "translate(100px, 0px)";
                    document.getElementById("ikon_3").style.transform = "translate(100px, 100px)";
                    document.getElementById("ikon_4").style.transform = "translate(0px, 100px)";
                    document.getElementById("ikon_5").style.transform = "translate(-100px, 100px)";
                    document.getElementById("ikon_6").style.transform = "translate(-100px, 0px)";

                    document.getElementById("contact").style.background = "#f44336";
                } else if (pos == 2) {
                    document.getElementById("ikon_2").style.transform = "translate(0px, 0px)";
                    document.getElementById("ikon_3").style.transform = "translate(100px, 0px)";
                    document.getElementById("ikon_4").style.transform = "translate(100px, 100px)";
                    document.getElementById("ikon_5").style.transform = "translate(0px, 100px)";
                    document.getElementById("ikon_6").style.transform = "translate(-100px, 100px)";
                    document.getElementById("ikon_1").style.transform = "translate(-100px, 0px)";

                    document.getElementById("contact").style.background = "#5c6bc0";
                } else if (pos == 3) {
                    document.getElementById("ikon_3").style.transform = "translate(0px, 0px)";
                    document.getElementById("ikon_4").style.transform = "translate(100px, 0px)";
                    document.getElementById("ikon_5").style.transform = "translate(100px, 100px)";
                    document.getElementById("ikon_6").style.transform = "translate(0px, 100px)";
                    document.getElementById("ikon_1").style.transform = "translate(-100px, 100px)";
                    document.getElementById("ikon_2").style.transform = "translate(-100px, 0px)";

                    document.getElementById("contact").style.background = "#039be5";
                } else if (pos == 4) {
                    document.getElementById("ikon_4").style.transform = "translate(0px, 0px)";
                    document.getElementById("ikon_5").style.transform = "translate(100px, 0px)";
                    document.getElementById("ikon_6").style.transform = "translate(100px, 100px)";
                    document.getElementById("ikon_1").style.transform = "translate(0px, 100px)";
                    document.getElementById("ikon_2").style.transform = "translate(-100px, 100px)";
                    document.getElementById("ikon_3").style.transform = "translate(-100px, 0px)";

                    document.getElementById("contact").style.background = "#ef4b5e";
                } else if (pos == 5) {
                    document.getElementById("ikon_5").style.transform = "translate(0px, 0px)";
                    document.getElementById("ikon_6").style.transform = "translate(100px, 0px)";
                    document.getElementById("ikon_1").style.transform = "translate(100px, 100px)";
                    document.getElementById("ikon_2").style.transform = "translate(0px, 100px)";
                    document.getElementById("ikon_3").style.transform = "translate(-100px, 100px)";
                    document.getElementById("ikon_4").style.transform = "translate(-100px, 0px)";

                    document.getElementById("contact").style.background = "#1da1f3";
                } else if (pos == 6) {
                    document.getElementById("ikon_6").style.transform = "translate(0px, 0px)";
                    document.getElementById("ikon_1").style.transform = "translate(100px, 0px)";
                    document.getElementById("ikon_2").style.transform = "translate(100px, 100px)";
                    document.getElementById("ikon_3").style.transform = "translate(0px, 100px)";
                    document.getElementById("ikon_4").style.transform = "translate(-100px, 100px)";
                    document.getElementById("ikon_5").style.transform = "translate(-100px, 0px)";

                    document.getElementById("contact").style.background = "#1976d2";
                }
            }

            function hover_p01() {
                document.getElementById("project01").style.zIndex = "2";
                document.getElementById("imgproject01").style.width = "800px";
                document.getElementById("imgproject01").style.height = "450px";
                document.getElementById("imgproject01").style.transform = "translate(-50%, 10%)";
            }

            function hout_p01() {
                document.getElementById("project01").style.zIndex = "0";
                document.getElementById("imgproject01").style.width = "340px";
                document.getElementById("imgproject01").style.height = "150px";
                document.getElementById("imgproject01").style.transform = "translate(0, 0)";
            }

            function hover_p02() {
                document.getElementById("project02").style.zIndex = "2";
                document.getElementById("imgproject02").style.width = "800px";
                document.getElementById("imgproject02").style.height = "600px";
                document.getElementById("imgproject02").style.transform = "translate(-50%, -40%)";
            }

            function hout_p02() {
                document.getElementById("project02").style.zIndex = "0";
                document.getElementById("imgproject02").style.width = "340px";
                document.getElementById("imgproject02").style.height = "150px";
                document.getElementById("imgproject02").style.transform = "translate(0, 0)";
            }

            function hover_p03() {
                document.getElementById("project03").style.zIndex = "2";
                document.getElementById("imgproject03").style.width = "800px";
                document.getElementById("imgproject03").style.height = "470px";
                document.getElementById("imgproject03").style.transform = "translate(-50%, -70%)";
            }

            function hout_p03() {
                document.getElementById("project03").style.zIndex = "0";
                document.getElementById("imgproject03").style.width = "340px";
                document.getElementById("imgproject03").style.height = "150px";
                document.getElementById("imgproject03").style.transform = "translate(0, 0)";
            }
        </script>
    </body>
</html>
