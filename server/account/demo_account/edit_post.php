<?php
    require "includes/html_head.php";
?>
<!-- CSS -->
<link rel="stylesheet" href="style.css">

<title>Trình sửa Bài viết | Sun Station Write</title>
</head>

<?php
    require "includes/style.php";
?>

<body>
<?php
require "includes/header.php";
?>

<div id="container">
    <h1>Chỉnh sửa Bài Viết</h1>

    <form method="post" entype="multipart/form-data">
        <h3>Tìm kiếm bài viết</h3>
        <input placeholder="Nhập tên bài viết cần sửa của bạn ..." name="find_input_title" required>
        <button id="btn_post" name="btn_find_post">Tìm kiếm</button><br><br>
    </form>

    <!-- <form method="post" entype="multipart/form-data">
        <h3>Tiêu đề</h3>
        <input name="post_input_title" required>
        <h3>Mô tả</h3>
        <textarea class="post_input_describe" name="post_input_describe"></textarea>
        <h3>Nội dung Bài Viết</h3>
        <textarea class="post_input_content" name="post_input_content" required></textarea>
        <h3>Chế độ bài viết</h3>
        <input name="private_mode" id="private_mode" class="post_mode" type="checkbox">
        <p class="post_label_title">
            <label for="private_mode">Riêng tư</label>
        </p><br><br>
        <button id="btn_post" name="btn_post">Đăng bài</button><br><br>
    </form> -->

<?php

    // Luồng xử lí 1

    if(isset($_POST['btn_find_post']))
    {
        post_find();
    }
    function post_find()
    {
        $find = $_POST['find_input_title'];

        if(!file_exists("../../../web/post/unbin/{$find}")) {
            echo "<div id='container'><h4 id='thongbao'>Không tìm thấy bài viết! Hãy kiểm tra và thử lại.</h4></div>";
        }
        else {
            if(file_exists("../../../web/post/unbin/{$find}")) {
                // Biên dịch tên Bài Viết đã mã hóa
                $read_code_name = "../../../web/post/unbin/{$find}";
                $fp_read_code_name = fopen($read_code_name, "r");
                $contents_code_name = fread($fp_read_code_name, filesize($read_code_name));
                fclose($fp_read_code_name);

                // Đọc chế độ Bài Viết
                $read_mode = "../../../web/post/all_post/{$contents_code_name}/post_mode";
                $fp_read_mode = fopen($read_mode, "r");
                $contents_mode = fread($fp_read_mode, filesize($read_mode));
                fclose($fp_read_mode);

                // Đọc tên Bài Viết
                $read_name = "../../../web/post/all_post/{$contents_code_name}/post_name";
                $fp_read_name = fopen($read_name, "r");
                $contents_name = fread($fp_read_name, filesize($read_name));
                fclose($fp_read_name);

                // Đọc mô tả Bài Viết
                $read_describe = "../../../web/post/all_post/{$contents_code_name}/describe.php";
                $fp_read_describe = fopen($read_describe, "r");
                $contents_describe = fread($fp_read_describe, filesize($read_describe));
                fclose($fp_read_describe);

                // Đọc nội dung Bài Viết
                $read_content = "../../../web/post/all_post/{$contents_code_name}/content.php";
                $fp_read_content = fopen($read_content, "r");
                $contents_content = fread($fp_read_content, filesize($read_content));
                fclose($fp_read_content);
                
                if($contents_mode === "public") {
                    echo "<p>Kết quả tìm kiếm cho <i>$find</i></p>";
                    echo "<form method='post' entype='multipart/form-data'><input name='setep' style='display:none' value='$contents_code_name'><input name='setep_2' style='display:none' value='$contents_name'><h3>Tiêu đề</h3><input name='post_input_title' value='$contents_name'><h3>Mô tả</h3><textarea class='post_input_describe' name='post_input_describe'>$contents_describe</textarea><h3>Nội dung Bài Viết</h3><textarea class='post_input_content' name='post_input_content'>$contents_content</textarea><h3>Chế độ bài viết</h3><input name='private_mode' id='private_mode' class='post_mode' type='checkbox'><p class='post_label_title'><label for='private_mode'>Riêng tư</label></p><br><br><button id='btn_post' name='btn_post'>Sửa bài</button><br><br></form>";
                }
                else {
                    echo "<p>Kết quả tìm kiếm cho <i>$find</i></p>";
                    echo "<form method='post' entype='multipart/form-data'><input name='setep' style='display:none' value='$contents_code_name'><input name='setep_2' style='display:none' value='$contents_name'><h3>Tiêu đề</h3><input name='post_input_title' value='$contents_name'><h3>Mô tả</h3><textarea class='post_input_describe' name='post_input_describe'>$contents_describe</textarea><h3>Nội dung Bài Viết</h3><textarea class='post_input_content' name='post_input_content'>$contents_content</textarea><h3>Chế độ bài viết</h3><input name='private_mode' id='private_mode' class='post_mode' type='checkbox' checked><p class='post_label_title'><label for='private_mode'>Riêng tư</label></p><br><br><button id='btn_post' name='btn_post'>Sửa bài</button><br><br></form>";
                }
            }

        }

    }


    // Luồng xử lí 2

    if(isset($_POST['btn_post']))
    {
        post_crt();
    }
    function post_crt()
    {
        $title = $_POST['post_input_title'];
        $setep = $_POST['setep']; // Mã bài viết
        $setep_2 = $_POST['setep_2']; // Tên cũ của bài viết

        $describe = $_POST['post_input_describe'];
        $content = $_POST['post_input_content'];

        // $find = $_POST['find_input_title'];

        // Biên dịch tên Bài Viết đã mã hóa
        // $read_code_name = "../../../web/post/unbin/{$find}";
        // $fp_read_code_name = fopen($read_code_name, "r");
        // $contents_code_name = fread($fp_read_code_name, filesize($read_code_name));
        // fclose($fp_read_code_name);

        // Đọc chế độ Bài Viết
        $read_mode = "../../../web/post/all_post/{$setep}/post_mode";
        $fp_read_mode = fopen($read_mode, "r");
        $contents_mode = fread($fp_read_mode, filesize($read_mode));
        fclose($fp_read_mode);

        // Đọc tên Bài Viết
        $read_name = "../../../web/post/all_post/{$setep}/post_name";
        $fp_read_name = fopen($read_name, "r");
        $contents_name = fread($fp_read_name, filesize($read_name));
        fclose($fp_read_name);

        // Đọc mô tả Bài Viết
        $read_describe = "../../../web/post/all_post/{$setep}/describe.php";
        $fp_read_describe = fopen($read_describe, "r");
        $contents_describe = fread($fp_read_describe, filesize($read_describe));
        fclose($fp_read_describe);

        // Đọc nội dung Bài Viết
        $read_content = "../../../web/post/all_post/{$setep}/content.php";
        $fp_read_content = fopen($read_content, "r");
        $contents_content = fread($fp_read_content, filesize($read_content));
        fclose($fp_read_content);
                
        // Đọc tên Tài Khoản
        // $read_account = "../../../web/post/all_post/{$contents_code_name}/demo_account";
        // $fp_read_account = fopen($read_account, "r");
        // $contents_account = fread($fp_read_account, filesize($read_account));
        // fclose($fp_read_account);

        // (4) Tạo thư mục có tên là tên bài viết trong all_post chung
        
        $edit_name = fopen("../../../web/post/all_post/{$setep}/post_name", "w+");
        fwrite($edit_name, "$title");

        // Tạo tên bài viết
        $write_content = fopen("../../../web/post/all_post/{$setep}/post_name", "w+");
        fwrite($write_content, "$title");

        // Tạo phần mô tả
        $write_describe_public = fopen("../../../web/post/all_post/{$setep}/describe.php", "w+");
        fwrite($write_describe_public, "$describe");

        // Tạo file content chứa nội dung bài viết công khai
        $write_content_public = fopen("../../../web/post/all_post/{$setep}/content.php", "w+");
        fwrite($write_content_public, "$content");

        // (1) Sửa tên Bài Viết trong all_post chung

        // Tạo tên bài viết
        $write_content = fopen("../../../web/post/all_post/{$setep}/post_name", "w+");
        fwrite($write_content, "$title");

        // Tạo phần mô tả
        $write_describe = fopen("../../../web/post/all_post/{$setep}/describe.php", "w+");
        fwrite($write_describe, "$describe");

        // Tạo phần content
        $write_content = fopen("../../../web/post/all_post/{$setep}/content.php", "w+");
        fwrite($write_content, "$content");

        // (1) Tạo file lưu chủ đề bài viết trong all_post chung
        $write_post_theme = fopen("../../../web/post/all_post/{$setep}/post_theme", "w+");
        fwrite($write_post_theme, "bài viết");

        // (1) Tạo file giao diện của bài viết trong all_post chung
        $write_post_display = fopen("../../../web/post/all_post/{$setep}/index.php", "w+");
        fwrite($write_post_display, "<?php require '../../../../includes/html_head.php';?><link rel='stylesheet' href='../../../../setting/main_file/post_tag.css'><title>$title</title></head><body><?php require '../../../../includes/header.php';?><div id='container'><h1>$title</h1><h2>Mô tả</h2><?php require 'describe.php' ?><br><h2>Nội dung</h2><br><?php require 'content.php' ?></div><?php require '../../../../includes/footer.php';?></body><script src='/sunstation_write/setting/shared_file/main.js'></script></html>");

        // Xử lí chế độ của Bài Viết
        if($_SERVER['REQUEST_METHOD'] == "POST") {
            if(isset($_POST['private_mode'])){
                // (1) (2) Tạo file cài đặt chế độ bài viết all_post chung là riêng tư
                $write_post_mode = fopen("../../../web/post/all_post/{$setep}/post_mode", "w+");
                fwrite($write_post_mode, "private");
                
                // (3) Tạo hình chiếu của bài viết trong unbin
                rename("../../../web/post/unbin/$setep_2", "../../../web/post/unbin/$title");
                $write_post = fopen("../../../web/post/unbin/{$title}", "w+");
                fwrite($write_post, "$setep");

                // Xóa Bài Viết phần all_post riêng tư
                // $private_all_post = "all_post/$setep/index.php";

                // if (file_exists($private_all_post))  {
                //     unlink($private_all_post);
                // }
                

                // Xóa Bài Viết phần phân loại Riêng Tư
                // $private_post = "post/$setep/index.php";

                // if (file_exists($private_post))  {
                //     unlink($private_post);
                // }
                
            }
            
            else {
                // (1) (2) Tạo file cài đặt chế độ bài viết all_post và post gần nhất là công khai
                $write_post_mode = fopen("../../../web/post/all_post/{$setep}/post_mode", "w+");
                fwrite($write_post_mode, "public");
                
                // (3) Tạo hình chiếu của bài viết trong unbin
                rename("../../../web/post/unbin/$setep_2", "../../../web/post/unbin/$title");
                $write_post = fopen("../../../web/post/unbin/{$title}", "w+");
                fwrite($write_post, "$setep");

                // Bật chế độ công khai bài viết

                

                // $write_post_mode_public = fopen("../../../web/post/all_post/{$title}/post_mode", "w+");
                // fwrite($write_post_mode_public, "public");
                // Có thể đoạn code này không cần thiết (Lập file chứa chế độ hiển thị bài viết).

                // Tạo đánh dấu tên Tài khoản tạo ra Bài viết
                // $get_account_file = "account_name.php";

                // Lấy tên Tài khoản
                // $open_acc = fopen($get_account_file, "r"); //mở file ở chế độ đọc
                // $get_account_name = fread($open_acc, filesize($get_account_file)); //đọc file
                
                // (4) Lập file đánh dấu tên Tài Khoản trong phần công khai bài viết
                // $write_account_name = fopen("../../../web/post/all_post/{$setep}/account_name", "w+");
                // fwrite($write_account_name, $get_account_name);
                
                // (4) Tạo file lưu chủ đề bài viết trong all_post chung
                // $write_post_theme = fopen("../../../web/post/all_post/{$setep}/post_theme", "w+");
                // fwrite($write_post_theme, "bài viết");


                // Phân loại Bài Viết công khai theo Chủ đề Bài Viết

                // (5) Tạo thư mục chủ đề Bài Viết
                
                // rename("../../../web/post/post/all_post_post/$contents_name", "$title");
                
                // $edit_name = fopen("../../../web/post/post/all_post_post/{$setep}/post_name", "w+");
                // fwrite($edit_name, "$title");

                // Tạo tên bài viết
                // $write_content = fopen("../../../web/post/post/all_post_post/{$setep}/post_name", "w+");
                // fwrite($write_content, "$title");

                // Tạo phần mô tả
                // $write_describe_classify = fopen("../../../web/post/post/all_post_post/{$setep}/describe.php", "w+");
                // fwrite($write_describe_classify, "$describe");

                // Tạo phần content
                // $write_content_classify = fopen("../../../web/post/post/all_post_post/{$setep}/content.php", "w+");
                // fwrite($write_content_classify, "$content");

                // Lập file đánh dấu tên Tài Khoản trong phần bài viết phân loại
                // $write_account_name_classify = fopen("../../../web/post/post/all_post_post/{$setep}/account_name", "w+");
                // fwrite($write_account_name_classify, $get_account_name);
                
                // (5) Tạo file lưu chủ đề bài viết trong all_post phân loại
                // $write_post_theme_classify = fopen("../../../web/post/post/all_post_post/{$setep}/post_theme", "w+");
                // fwrite($write_post_theme_classify, "bài viết");

                // Xóa Bài Viết phần all_post Công khai
                // $public_all_post = "../../../web/post/all_post/$setep/index.php";

                // if (file_exists($public_all_post))  {
                //     unlink($public_all_post);
                // }

                // Xóa Bài Viết phần phân loại Công khai
                // $public_post = "../../../web/post/post/all_post_post/$setep/index.php";

                // if (file_exists($public_post))  {
                //     unlink($public_post);
                // }
                
            }
        }
    echo "<h4 id='thongbao'>Đã sửa Bài Viết thành công!</h4>";
}
?>

</div>


<?php
require "../../../includes/footer.php";
?>

</body>
<script src="/sunstation_write/setting/shared_file/main.js"></script>
</html>