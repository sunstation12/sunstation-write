<?php
    require "includes/html_head.php";
?>
<!-- CSS -->
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="../../../setting/main_file/post_tag.css">

<title>Trình tạo Bài viết | Sun Station Write</title>
</head>

<?php
    require "includes/style.php";
?>

<body>
<?php
require "includes/header.php";
?>

<div id="container">
    <h1>Bài Viết chủ đề Bài Đăng</h1>

    <form method="post" entype="multipart/form-data">
        <h3>Tiêu đề</h3>
        <input name="post_input_title" required>
        <h3>Mô tả</h3>
        <textarea class="post_input_describe" id="post_input_describe" name="post_input_describe"></textarea>
        <h3>Nội dung Bài Viết</h3>

        <?php
            require "../../../server_manage_web/UPDATE/command_post_tool.php";
        ?>

        <textarea class="post_input_content" id="post_input_content" name="post_input_content" required></textarea>
        <h3>Chế độ bài viết</h3>
        <input name="private_mode" id="private_mode" class="post_mode" type="checkbox">
        <p class="post_label_title">
            <label for="private_mode">Riêng tư</label>
        </p>
        <h3 title="Không bắt buộc">Chủ đề đã tạo trong Bài Đăng (Không bắt buộc)</h3>
        <p class="p_text_guide"><span style="color:red">Lưu ý:</span> Bạn phải viết đúng chính tả tên chủ đề (Chủ đề bạn đã tạo) thì bộ lọc mới có tác dụng.</p><br>
        <input name="post_theme_classify" placeholder="Viết in thường tên chủ đề" title="Không bắt buộc"><br><br>
        <button id="btn_post" name="btn_post">Đăng bài</button><br><br>
    </form>

<?php
    // $input = $_POST['post_input_describe'];

    // if(isset($_POST['cmd_post--enter']))
    // {
        
    // }
?>

<?php
    if(isset($_POST['btn_post']))
    {
        post_crt();
    }
    function post_crt()
    {
        $title = $_POST['post_input_title'];
        
        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
        $post_name_random = substr(str_shuffle($permitted_chars), 0, 1000000000000000);

        // Kiểm tra tên bài viết có tồn tại không

        // if(file_exists("all_post/{$title}")) {
        //     echo "<div id='container'><h4 id='thongbao'>Tên bài viết đã tồn tại trong Hệ Thống!</h4></div>";
        // }

        if (!file_exists("../../../web/post/all_post/$post_name_random")) {

            $describe = $_POST['post_input_describe'];
            $content = $_POST['post_input_content'];
            $post_theme_classify = $_POST['post_theme_classify'];
            
            // (1) Tạo thư mục có tên là tên bài viết trong all_post gần nhất
            // mkdir("all_post/{$post_name_random}");
            
            /// (3) Tạo hình chiếu của bài viết trong unbin
            $write_post = fopen("../../../web/post/unbin/{$title}", "w+");
            fwrite($write_post, "$post_name_random");

            // Bật chế độ công khai bài viết

            // (4) Tạo thư mục có tên là tên bài viết trong all_post chung
            mkdir("../../../web/post/all_post/{$post_name_random}");

            // Tạo tên bài viết
            $write_content = fopen("../../../web/post/all_post/{$post_name_random}/post_name", "w+");
            fwrite($write_content, "$title");

            // Tạo phần mô tả
            $write_describe_public = fopen("../../../web/post/all_post/{$post_name_random}/describe.php", "w+");
            fwrite($write_describe_public, "<p>$describe</p>");

            // Tạo file content chứa nội dung bài viết công khai
            $write_content_public = fopen("../../../web/post/all_post/{$post_name_random}/content.php", "w+");
            fwrite($write_content_public, "<p>$content</p>");


            // Tạo đánh dấu tên Tài khoản tạo ra Bài viết
            $get_account_file = "account_name.php";

            // Lấy tên Tài khoản
            $open_acc = fopen($get_account_file, "r"); //mở file ở chế độ đọc
            $get_account_name = fread($open_acc, filesize($get_account_file)); //đọc file
            
            // (4) Lập file đánh dấu tên Tài Khoản trong phần công khai bài viết
            $write_account_name = fopen("../../../web/post/all_post/{$post_name_random}/account_name", "w+");
            fwrite($write_account_name, $get_account_name);
            
            // (4) Tạo file lưu chủ đề bài viết trong all_post chung
            $write_post_theme = fopen("../../../web/post/all_post/{$post_name_random}/post_theme", "w+");
            fwrite($write_post_theme, "bài viết");

            // (4) Tạo file lưu chủ đề bài viết phân loại trong all_post chung
            // $write_post_theme = fopen("../../../web/post/all_post/{$post_name_random}/post_theme_classify", "w+");
            // fwrite($write_post_theme, $post_theme_classify);

            // (4) Tạo file giao diện của bài viết trong all_post chung
            $write_post_display = fopen("../../../web/post/all_post/{$post_name_random}/index.php", "w+");
            fwrite($write_post_display, "<?php require '../../../../includes/html_head.php';?><link rel='stylesheet' href='../../../../setting/main_file/post_tag.css'><title>$title</title></head><body><?php require '../../../../includes/header.php';?><div id='container' class='css_post_tag_div_UPDATE'><h1>$title</h1><h2>Mô tả<h2><p><?php require 'describe.php' ?></p></p><br><h2>Nội dung</h2><br><p><?php require 'content.php' ?></p></div><?php require '../../../../includes/footer.php';?></body><script src='/sunstation_write/setting/shared_file/main.js'></script></html>");

            // Lưu trong thư mục chủ đề

            // Kiểm tra chủ đề trong Bài Viết có tồn tại không
            if(file_exists("post/$post_theme_classify")) {
                // Tạo file lưu tên chủ đề con của Post (Bài Đăng) trong folder bài viết 
                $write_theme_child_1 = fopen("../../../web/post/all_post/{$post_name_random}/theme_child_1.php", "w+");
                fwrite($write_theme_child_1, $post_theme_classify);

                // Tạo file thay thế bài viết trong Post (Bài Đăng)
                $write_theme_child_items = fopen("post/$title", "w+");
                fwrite($write_theme_child_items, $post_theme_classify);
            }

            else {
                echo "<h4 id='thongbao'>Chủ đề bạn nhập không tồn tại!</h4>";
            }

            // Tạo tên bài viết
            // $write_content = fopen("all_post/{$post_name_random}/post_name", "w+");
            // fwrite($write_content, "$title");

            // Tạo phần mô tả
            // $write_describe = fopen("all_post/{$post_name_random}/describe.php", "w+");
            // fwrite($write_describe, "<p>$describe</p>");

            // Tạo phần content
            // $write_content = fopen("all_post/{$post_name_random}/content.php", "w+");
            // fwrite($write_content, "<p>$content</p>");

            // (2) Tạo thư mục có tên là tên bài viết trong post gần nhất
            // mkdir("post/{$post_name_random}");

            // Tạo tên bài viết
            // $write_content = fopen("post/{$post_name_random}/post_name", "w+");
            // fwrite($write_content, "$title");

            // Tạo phần mô tả
            // $write_describe = fopen("post/{$post_name_random}/describe.php", "w+");
            // fwrite($write_describe, "<p>$describe</p>");

            // Tạo phần content
            // $write_content = fopen("post/{$post_name_random}/content.php", "w+");
            // fwrite($write_content, "<p>$content</p>");

            // Xử lí chế độ của Bài Viết
            if($post_theme_classify === "") {
                if($_SERVER['REQUEST_METHOD'] == "POST") {
                    if(isset($_POST['private_mode'])){
                        // (1) (2) Tạo file cài đặt chế độ bài viết all_post chung là riêng tư
                        $write_post_mode = fopen("../../../web/post/all_post/{$post_name_random}/post_mode", "w+");
                        fwrite($write_post_mode, "private");
                        
                        // (3) Tạo hình chiếu của bài viết trong unbin
                        $write_post = fopen("../../../web/post/unbin/{$title}", "w+");
                        fwrite($write_post, "$post_name_random");
                    }
                    
                    else {
                        
                        // (1) (2) Tạo file cài đặt chế độ bài viết all_post chung là công khai
                        $write_post_mode = fopen("../../../web/post/all_post/{$post_name_random}/post_mode", "w+");
                        fwrite($write_post_mode, "public");
                        
                        // (3) Tạo hình chiếu của bài viết trong unbin
                        $write_post = fopen("../../../web/post/unbin/{$title}", "w+");
                        fwrite($write_post, "$post_name_random");
    
                        // // Bật chế độ công khai bài viết
    
                        // // (4) Tạo thư mục có tên là tên bài viết trong all_post chung
                        // mkdir("../../../web/post/all_post/{$post_name_random}");
    
                        // // Tạo tên bài viết
                        // $write_content = fopen("../../../web/post/all_post/{$post_name_random}/post_name", "w+");
                        // fwrite($write_content, "$title");
    
                        // // Tạo phần mô tả
                        // $write_describe_public = fopen("../../../web/post/all_post/{$post_name_random}/describe.php", "w+");
                        // fwrite($write_describe_public, "<p>$describe</p>");
    
                        // // Tạo file content chứa nội dung bài viết công khai
                        // $write_content_public = fopen("../../../web/post/all_post/{$post_name_random}/content.php", "w+");
                        // fwrite($write_content_public, "<p>$content</p>");
    
                        // $write_post_mode_public = fopen("../../../web/post/all_post/{$title}/post_mode", "w+");
                        // fwrite($write_post_mode_public, "public");
                        // Có thể đoạn code này không cần thiết (Lập file chứa chế độ hiển thị bài viết).
    
                        // Tạo đánh dấu tên Tài khoản tạo ra Bài viết
                        // $get_account_file = "account_name.php";
    
                        // Lấy tên Tài khoản
                        // $open_acc = fopen($get_account_file, "r"); //mở file ở chế độ đọc
                        // $get_account_name = fread($open_acc, filesize($get_account_file)); //đọc file
                        
                        // (4) Lập file đánh dấu tên Tài Khoản trong phần công khai bài viết
                        // $write_account_name = fopen("../../../web/post/all_post/{$post_name_random}/account_name", "w+");
                        // fwrite($write_account_name, $get_account_name);
                        
                        // (4) Tạo file lưu chủ đề bài viết trong all_post chung
                        // $write_post_theme = fopen("../../../web/post/all_post/{$post_name_random}/post_theme", "w+");
                        // fwrite($write_post_theme, "bài viết");
    
    
                        // Phân loại Bài Viết công khai theo Chủ đề Bài Viết
    
                        // (5) Tạo thư mục chủ đề Bài Viết
                        // mkdir("../../../web/post/post/all_post_post/{$post_name_random}");
    
                        // Tạo tên bài viết
                        // $write_content = fopen("../../../web/post/post/all_post_post/{$post_name_random}/post_name", "w+");
                        // fwrite($write_content, "$title");
    
                        // Tạo phần mô tả
                        // $write_describe_classify = fopen("../../../web/post/post/all_post_post/{$post_name_random}/describe.php", "w+");
                        // fwrite($write_describe_classify, "<p>$describe</p>");
    
                        // Tạo phần content
                        // $write_content_classify = fopen("../../../web/post/post/all_post_post/{$post_name_random}/content.php", "w+");
                        // fwrite($write_content_classify, "<p>$content</p>");
    
                        // Lập file đánh dấu tên Tài Khoản trong phần bài viết phân loại
                        // $write_account_name_classify = fopen("../../../web/post/post/all_post_post/{$post_name_random}/account_name", "w+");
                        // fwrite($write_account_name_classify, $get_account_name);
                        
                        // (5) Tạo file lưu chủ đề bài viết trong all_post phân loại
                        // $write_post_theme_classify = fopen("../../../web/post/post/all_post_post/{$post_name_random}/post_theme", "w+");
                        // fwrite($write_post_theme_classify, "bài viết");
                    }
                }
            }
        }
        echo "<h4 id='thongbao'>Đã tạo Bài Viết thành công!</h4>";
    }
?>

<p class="p_text_guide">
    <span><</span><span>br></span>
    để xuống dòng;<br>
    <span><</span><span>br></span><span><</span><span>br></span>
    để cách 2 dòng viết đoạn mới;<br>
    <span><</span><span>b></span><span style="color:red">*</span><span><</span><span>/b></span>
    để viết đậm;<br>
    <span><</span><span>i></span><span style="color:red">*</span><span><</span><span>/i></span>
    để in nghiêng;<br>
    <span><</span><span>b></span><span><</span><span>i></span><span style="color:red">*</span><span><</span><span>/i></span><span><</span><span>/b></span>
    để vừa viết đậm vừa in nghiêng;<br>
    <span><</span><span>span></span><span style="color:red">*</span><span><</span><span>/span></span>
    để đánh dấu dòng chữ là những đề mục nhỏ;
</p>

</div>


<?php
require "../../../includes/footer.php";
?>

</body>

<?php
    require "../../../server_manage_web/UPDATE/js_command_post_tool.php";
?>

<script src="/sunstation_write/setting/shared_file/main.js"></script>
</html>