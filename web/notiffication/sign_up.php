<?php
    require "../../includes/html_head.php";
?>
<!-- CSS -->
<link rel="stylesheet" href="/sunstation_write/setting/main_file/form.css">

<title>Đăng kí Tài Khoản | Sun Station Write</title>
</head>
<body>
<?php
require "../../includes/header.php";
?>

<?php
    if(isset($_POST['sign_up']))
    {
        func();
    }
    function func()
    {
        $account_name = $_POST['account_name'];

        if(file_exists("../../server/account/{$account_name}")) {
            echo "<div id='container'><h4 id='thongbao'>Tên tài khoản đã tồn tại trong hệ thống!</h4></div>";
        }
        else {
            mkdir("../../server/account/{$account_name}");

            $login_name = $_POST['login_name'];
            $write_login_name = fopen("../../server/account/{$account_name}/login_name", "w+");
            fwrite($write_login_name, $login_name);

            $password = $_POST['password'];
            $write_password = fopen("../../server/account/{$account_name}/password", "w+");
            fwrite($write_password, $password);
            
            $write_licensing = fopen("../../server/file_licensing/unlicensed/{$account_name}", "w+");
            fwrite($write_licensing, "Tên đăng nhập: {$login_name} / Mật khẩu: {$password}");

            echo "<div id='container'><h4 id='thongbao'>Đã tạo Tài Khoản thành công! <a id='link_permission' href='../grant_permission'>Nhấn vào đây<a> để hệ thống cấp quyền cho bạn sử dụng tài khoản.</h4></div>";
        }
    }
?>

<?php
require "../../includes/footer.php";
?>
</body>
<script src="/sunstation_write/setting/shared_file/main.js"></script>
</html>