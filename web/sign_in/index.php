<?php
    require "../../includes/html_head.php";
?>
<!-- CSS -->
<link rel="stylesheet" href="/sunstation_write/setting/main_file/form.css">

<title>Đăng nhập | Sun Station Write</title>
</head>
<body>
<?php
require "../../includes/header.php";
?>

<div id="container">
    <h1>Đăng nhập</h1>
    <form method="post" enctype="multipart/form-data">
        <div class="form_theme">
            <label for="account_name">
                <h3>Tên tài khoản</h3>
            </label><br>
            <input type="text" placeholder="Tên tài khoản của bạn..." id="account_name" name="account_name" autocomplete="off" required>
        </div>
        <div class="form_theme">
            <label for="password">
                <h3>Mật khẩu</h3>
            </label><br>
            <input type="password" placeholder="Mật khẩu của bạn..." id="password" name="password" required>
        </div>
        
        <button type="submit" name="btn_sign_in">Đăng nhập</button>
    </form>
    <div id="link_sign">
        <div>Bạn chưa có tài khoản?</div>
        <a id="link_sign_a" href="/sunstation_write/web/sign_up/">Đăng kí</a>
    </div>

    <?php
    if(isset($_POST['btn_sign_in']))
    {
        sign_in_fct();
    }
    function sign_in_fct()
    {
        $account_name = $_POST['account_name'];
        $password = $_POST['password'];

        if (file_exists("../../server/account/$account_name")) {
            $pass = "../../server/account/{$account_name}/password.php";
            $fp_pass = fopen($pass, "r");
            $contents_pass = fread($fp_pass, filesize($pass));
            fclose($fp_pass);

            if("$password" === "$contents_pass") {
                echo "<h4 style='margin-top:20px' id='thongbao'>Đăng nhập thành công! <a href='../../server/account/$account_name'>Truy cập tài khoản</a></h4>";
            }
        }
        
        if (!file_exists("../../server/account/$account_name")) {
            echo "<h4 style='margin-top:20px' id='thongbao'>Đăng nhập thất bại! Không tìm thấy tài khoản!</h4>";
        }
    }
?>

</div>

<?php
require "../../includes/footer.php";
?>

</body>
<script src="/sunstation_write/setting/shared_file/main.js"></script>
</html>