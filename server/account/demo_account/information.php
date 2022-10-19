<?php
    require "includes/html_head.php";
?>

<!-- CSS -->
<link rel="stylesheet" href="style.css">

<title>Bài viết | Sun Station Write</title>
</head>

<?php
    require "includes/style.php";
?>

<body>
<?php
require "includes/header.php";
?>

<div id="container">
    <h1>Thông tin của bạn</h2>

    <button id="btn_edit_info">
        <a href="edit_information.php">Chỉnh sửa</a>
    </button>

    <h3>Tên tài khoản:</h3>
    <?php
        $read_account_name = "account_name.php";
        $fp_read_account_name = fopen($read_account_name, "r");
        $contents_account_name = fread($fp_read_account_name, filesize($read_account_name));
        fclose($fp_read_account_name);

        echo "<h3 class='info_title_ans'>$contents_account_name</h3>";
    ?><br>
    <h3>Tên đăng nhập:</h3>
    <?php
        $read_user_name = "user_name.php";
        $fp_read_user_name = fopen($read_user_name, "r");
        $contents_user_name = fread($fp_read_user_name, filesize($read_user_name));
        fclose($fp_read_user_name);

        echo "<h3 class='info_title_ans'>$contents_user_name</h3>";
    ?><br>
    <h3>Mật khẩu:</h3>
    <?php
        $read_password = "password.php";
        $fp_read_password = fopen($read_password, "r");
        $contents_password = fread($fp_read_password, filesize($read_password));
        fclose($fp_read_password);

        echo "<h3 class='info_title_ans'>$contents_password</h3>";
    ?><br>
</div>

<?php
require "../../../includes/footer.php";
?>
</body>
<script src="/sunstation_write/setting/shared_file/main.js"></script>
</html>