<?php
    require "includes/html_head.php";
?>

<!-- CSS -->
<link rel="stylesheet" href="style.css">

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
    <h1>Bài Viết chủ đề Ghi Chú</h1>

    <form method="post" entype="multipart/form-data">
        <h3>Tiêu đề</h3>
        <input name="post_input_title" required>
        <h3>Mô tả</h3>
        <textarea class="post_input_describe" name="post_input_describe"></textarea>
        <h3>Nội dung Bài Viết</h3>
        <textarea class="post_input_content" name="post_input_content" required></textarea><br>

        <button id="btn_post" name="btn_post">Đăng bài</button><br><br>

        <p class="p_text_guide">Bài viết này sẽ được mã hóa!</p>
    </form>
</div>

<?php
    if(isset($_POST['btn_post']))
    {
        post_crt();
    }
    function post_crt()
    {
        $title = $_POST['post_input_title'];

        // Kiểm tra tên bài viết có tồn tại không
        if(file_exists("all_post/{$title}")) {
            echo "<div id='container'><h4 id='thongbao'>Tên bài viết đã tồn tại trong Hệ Thống!</h4></div>";
        }
        else {

            // Tạo thư mục có tên là tên bài viết trong all_post
            mkdir("all_post/{$title}");

            $describe = $_POST['post_input_describe'];
            $content = $_POST['post_input_content'];

            // Tạo phần mô tả
            $write_describe = fopen("all_post/{$title}/describe", "w+");
            fwrite($write_describe, $describe);

            // Tạo phần content
            $write_content = fopen("all_post/{$title}/content", "w+");
            fwrite($write_content, $content);

            // Tạo file cài đặt chế độ bài viết là mã hóa
            $write_post_mode = fopen("all_post/{$title}/post_mode", "w+");
            fwrite($write_post_mode, "encode");

            // Tạo thư mục có tên là tên bài viết trong note
            mkdir("note/{$title}");

            // Tạo phần mô tả
            $write_describe = fopen("note/{$title}/describe", "w+");
            fwrite($write_describe, $describe);

            // Tạo phần content
            $write_content = fopen("note/{$title}/content", "w+");
            fwrite($write_content, $content);

            // Tạo file cài đặt chế độ bài viết là mã hóa
            $write_post_mode = fopen("note/{$title}/post_mode", "w+");
            fwrite($write_post_mode, "encode");

            // Tạo hình chiếu của bài viết trong unbin
            $write_post = fopen("unbin/{$title}", "w+");
            fwrite($write_post, "name = {$title} / describe = {$describe} / content = {$content} / post mode = encode");

            echo "<h4 id='thongbao'>Đã tạo Bài Viết thành công!</h4></div>";
        }
    }
?>

<?php
require "../../../includes/footer.php";
?>

</body>
<script src="/sunstation_write/setting/shared_file/main.js"></script>
</html>