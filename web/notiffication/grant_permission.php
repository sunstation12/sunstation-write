<?php
    require "../../includes/html_head.php";
?>
<!-- CSS -->
<link rel="stylesheet" href="/sunstation_write/setting/main_file/form.css">

<title>Cấp quyền sử dụng Tài Khoản | Sun Station Write</title>
</head>
<body>
<?php
require "../../includes/header.php";
?>

<?php
    if(isset($_POST['grant_permission']))
    {
        server();
    }
    function server() {
        $account_name = $_POST['account_name'];

        if(file_exists("../../server/file_licensing/unlicensed/{$account_name}")) {
            // Chuyển tài khoản sang Folder Đã Cấp Phép
            $source_file = "../../server/file_licensing/unlicensed/{$account_name}";
            $destination_path = "../../server/file_licensing/licensed/";
            rename($source_file, $destination_path.pathinfo($source_file, PATHINFO_BASENAME));

            // Tạo file Chính của Tài Khoản
            $write_index = fopen("../../server/account/{$account_name}/index.html", "w+");
            fwrite($write_index, "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><meta http-equiv='X-UA-Compatible' content='IE=edge'><meta name='viewport' content='width=device-width, initial-scale=1.0'><title>Document</title></head><body></body></html>");

            echo "<div id='container'><h4 id='thongbao'>Hệ thống đã Cấp quyền Thành công! Bạn có thể <a id='link_permission' href='../sign_in'>Đăng nhập<a> ngay bây giờ.</h4></div>";
        }
    }
?>

<?php
require "../../includes/footer.php";
?>
</body>
<script src="/sunstation_write/setting/shared_file/main.js"></script>
</html>