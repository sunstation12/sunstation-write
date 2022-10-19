<?php
    require "../includes/html_head.php";
?>

<title>Cài đặt | Sun Station Write</title>
</head>

<?php
    require "../includes/style.php";
?>

<style>
    #navigation {
        position: fixed;
        display: inline-block;
        z-index: 10;
    }

    #st_display {
        background-color: var(--blue_three);
    }
</style>

<body>
<?php
require "../includes/header_child.php";
?>

<?php
    require "../includes/setting_nav.php";
?>

<div id="container_setting">
    <h1>Màu sắc</h1>
    <div>
        <h2>Bộ màu</h2>
        <div class="st_box">
            <form method="post" entype="multipart/form-data">
                <div name="st_btn-color_set-blu" class="st_color" title="blu" id="blu">
                    <div class="st_color_box" style="--blue_color:#013582;"></div>
                    <div class="st_color_box" style="--blue_color:#024F9C;"></div>
                    <div class="st_color_box" style="--blue_color:#026DB5;"></div>
                    <div class="st_color_box" style="--blue_color:#51BBE8;"></div>
                    <div class="st_color_box" style="--blue_color:#DEF8FF;"></div>
                </div>
                <div name="st_btn-color_set-org" class="st_color" title="org" id="org">
                    <div class="st_color_box" style="--blue_color:#FD381C;"></div>
                    <div class="st_color_box" style="--blue_color:#E35019;"></div>
                    <div class="st_color_box" style="--blue_color:#FA7E27;"></div>
                    <div class="st_color_box" style="--blue_color:#ffb049;"></div>
                    <div class="st_color_box" style="--blue_color:#ffe8b9;"></div>
                </div>
                <div name="st_btn-color_set-violink" class="st_color" title="violink" id="violink">
                    <div class="st_color_box" style="--blue_color:#620241;"></div>
                    <div class="st_color_box" style="--blue_color:#930359;"></div>
                    <div class="st_color_box" style="--blue_color:#e161a7;"></div>
                    <div class="st_color_box" style="--blue_color:#ff69b5;"></div>
                    <div class="st_color_box" style="--blue_color:#ffbddb;"></div>
                </div><br>
                <input placeholder="Nhập tên bộ màu ..." id="st_input-color_set" name="st_input-color_set">
                <button name="st_btn-color_set">OK</button>
            </form>

            <?php
                if(isset($_POST['st_btn-color_set']))
                {
                    color_set();
                }
                function color_set()
                {
                    $input_set = $_POST['st_input-color_set'];

                    if($input_set === "blu") {
                        $write_content_color_set = fopen("../includes/color-root_setting.php", "w+");
                        fwrite($write_content_color_set, "<style>:root {--blue_one: #013582;--blue_two: #024F9C;--blue_three: #026DB5;--blue_four: #51BBE8;--blue_five: #DEF8FF;--blue_hover: #6ccbe5;--footer_content: #b7dae3;}</style>");
                    }
                    if($input_set === "org") {
                        $write_content_color_set = fopen("../includes/color-root_setting.php", "w+");
                        fwrite($write_content_color_set, "<style>:root {--blue_one: #FD381C;--blue_two: #E35019;--blue_three: #FA7E27;--blue_four: #ffb049;--blue_five: #ffe8b9;--blue_hover: #fbd077;--footer_content: #ffdf9e;}</style>");
                    }
                    if($input_set === "violink") {
                        $write_content_color_set = fopen("../includes/color-root_setting.php", "w+");
                        fwrite($write_content_color_set, "<style>:root {--blue_one: #620241;--blue_two: #930359;--blue_three: #e161a7;--blue_four: #ff69b5;--blue_five: #ffbddb;--blue_hover: #ff8abf;--footer_content: #ef91b9;}</style>");
                    }

                    echo "<h4 id='thongbao'>Nhấn vào đường link và bấm Enter trên bàn phím để thay đổi.<br>Hoặc <a href=''>Nhấn vào đây</a></h4>";
                }
            ?>

            <?php
                // Code tự động điền nội dung đã cài đặt, thay đổi
                $read_content = "../includes/color-root_setting.php";
                $fp_read_content = fopen($read_content, "r");
                $contents_content = fread($fp_read_content, filesize($read_content));
                fclose($fp_read_content);

                $content_html = htmlentities($contents_content);

                if(strpos($content_html, "--blue_one: #013582")) {
                    echo "<span style='display:none' id='color_key'>blu</span>";
                }
                if(strpos($content_html, "--blue_one: #FD381C")) {
                    echo "<span style='display:none' id='color_key'>org</span>";
                }
                if(strpos($content_html, "--blue_one: #620241")) {
                    echo "<span style='display:none' id='color_key'>violink</span>";
                }
                else {
                    echo "<span style='display:none' id='color_key'>false</span>";
                }
            ?>

        </div>
    </div>
</div>

</body>

<!-- Xử lí Tự động điền BỘ MÀU hiện tại -->
<script>
    var input_set = document.getElementById("st_input-color_set");
    var color_key = document.getElementById("color_key");

    var blu = document.getElementById("blu");
    var org = document.getElementById("org");
    var violink = document.getElementById("violink");

    if(color_key.innerHTML == "blu") {
        input_set.value = "blu";
        blu.style.background = "#6ccbe5";
    }
    if(color_key.innerHTML == "org") {
        input_set.value = "org";
        org.style.background = "#fbd077";
    }
    if(color_key.innerHTML == "violink") {
        input_set.value = "violink";
        violink.style.background = "#ff8abf";
    }
</script>

<!-- Xử lí Tự động điền BỘ MÀU đã chọn -->
<script>
    var input_set = document.getElementById("st_input-color_set");

    document.getElementById("blu").onclick = function() {
        input_set.value = "blu";
    }

    document.getElementById("org").onclick = function() {
        input_set.value = "org";
    }

    document.getElementById("violink").onclick = function() {
        input_set.value = "violink";
    }
</script>
<script src="/sunstation_write/setting/shared_file/main.js"></script>
</html>