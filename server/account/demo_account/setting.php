<?php
    require "includes/html_head.php";
?>

<?php
    // require "../../../includes/html_head.php"
?>

<!-- CSS -->
<link rel="stylesheet" href="style.css">

<title>Cài đặt | Sun Station Write</title>
</head>

<?php
    require "includes/style.php";
?>

<style>
    #navigation {
        position: fixed;
        display: inline-block;
        z-index: 10;
    }

    #st_intro {
        background-color: var(--blue_three);
    }
</style>

<body>
<?php
require "includes/header.php";
?>

<div id="navigation" class="setting_nav">
    <div id="st_intro" class="nav_items">
        <a href="setting.php">
            Giới thiệu
        </a>
    </div>
    <div class="nav_items">
        <a href="">
            Tài khoản
        </a>
    </div>
    <div class="nav_items">
        <a href="setting/display.php">
            Giao diện
        </a>
    </div>
</div>

<div id="container_setting">
    <div id="st_div_intro">
        <div id="st_home_title">Cài đặt Tài khoản của bạn</div>
        <div id="btn_start_st_div">
            <button onclick="btn_start_st()">Bắt đầu Cài đặt</button>
        </div>
    </div>
    <p>Chức năng mới đang trong quá trình thử nghiệm!</p>
    <p>Bạn có thể tùy chỉnh Tài Khoản, Giao Diện, Bài Viết,... </p>
</div>

</body>

<script>
    function btn_start_st() {
        window.location = "setting/display.php"; // Link tạm thời
    }
</script>

<script src="/sunstation_write/setting/shared_file/main.js"></script>
</html>