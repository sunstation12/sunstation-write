<?php
    require "includes/html_head.php";
?>

<!-- CSS -->
<link rel="stylesheet" href="style.css">

<title>Chỉnh sửa Thông tin | Sun Station Write</title>
</head>

<?php
    require "includes/style.php";
?>

<body>
<?php
require "includes/header.php";
?>

<div id="container">
    <h1>Chỉnh sửa Thông tin của bạn</h2>

    <form method="post" entype="multipart/form-data">
        <h3>Tên tài khoản:</h3>

        <?php
            $read_account_name = "account_name.php";
            $fp_read_account_name = fopen($read_account_name, "r");
            $contents_account_name = fread($fp_read_account_name, filesize($read_account_name));
            fclose($fp_read_account_name);
    
            echo "<h3 class='info_title_ans'>$contents_account_name<span style='color: red'>: Tên tài khoản không thể chỉnh sửa!</span></h3>";
        ?><br>

        <h3>Tên đăng nhập:</h3>

        <?php
            $read_user_name = "user_name.php";
            $fp_read_user_name = fopen($read_user_name, "r");
            $contents_user_name = fread($fp_read_user_name, filesize($read_user_name));
            fclose($fp_read_user_name);

            echo "<input name='edit_user_name' value='$contents_user_name'>";
        ?><br>

        <h3>Mật khẩu:</h3>
        <?php
            $read_password = "password.php";
            $fp_read_password = fopen($read_password, "r");
            $contents_password = fread($fp_read_password, filesize($read_password));
            fclose($fp_read_password);

            echo "<input name='edit_password' value='$contents_password'>";
        ?>
        
        <br><br>
        <button name="btn_edit_inf">Sửa Thông tin</button>
    </form>

    <?php
        if(isset($_POST['btn_edit_inf']))
        {
            edit_inf();
        }
        function edit_inf()
        {
            $user = $_POST['edit_user_name'];
            $password = $_POST['edit_password'];

            $write_user_name = fopen("user_name.php", "w+");
            fwrite($write_user_name, "$user");

            $write_password = fopen("password.php", "w+");
            fwrite($write_password, "$password");

            echo "<h4 id='thongbao'>Đã sửa Thông Tin thành công!</h4>";
        }
    ?>

</div>

<?php
require "../../../includes/footer.php";
?>
</body>
<script src="/sunstation_write/setting/shared_file/main.js"></script>
</html>