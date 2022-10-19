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
    <h1>Tạo chủ đề mới</h1>

    <form method="post" entype="multipart/form-data">
        <h3>Chủ đề lớn hơn</h3>
        <p class="p_text_guide" title="Đừng lo! Đây cũng chỉ là bạn tạo thư mục thôi mà!">
            <span style="color: red"><u>Ghi chú:</u></span>
            Nhập <span title="Quan trọng | Ghi chú | Bài đăng | Câu chuyện">1 trong 4 chủ đề chính</span> để tạo chủ đề của riêng bạn trong đó.<br>
            Hoặc để trống nếu bạn muốn thêm 1 chủ đề Chính nữa, ngoài 4 chủ đề đã cho.
        </p><br>
        <input id="post_input_theme" name="post_input_theme" placeholder="Viết đúng chính tả tên chủ đề chính">
        <h3>Tên chủ đề</h3>
        <input name="post_input_title" required>
        <h3>Mô tả</h3>
        <textarea class="post_input_describe" name="post_input_describe"></textarea>
        <br><br>
        <button id="btn_post" name="btn_post">Tạo chủ đề</button><br><br>
    </form>

    <?php
        if(isset($_POST['btn_post']))
        {
            theme_post_crt();
        }
        function theme_post_crt()
        {
            $theme = $_POST['post_input_theme'];
            $title = $_POST['post_input_title'];
            $describe = $_POST['post_input_describe'];

            if ($theme === "quan trọng") {
                mkdir("important/$title");

                $write_describe_theme = fopen("inf/important_{$title}-describe.php", "w+");
                fwrite($write_describe_theme, "$describe");

                // $write_index_theme = fopen("inf/important_{$title}-index.php", "w+");
                // fwrite($write_index_theme, "important");

                echo "<h4 id='thongbao'>Tạo Chủ Đề thành công!</h4>";
            }

            if ($theme === "ghi chú") {
                mkdir("note/$title");

                $write_describe_theme = fopen("inf/note_{$title}-describe.php", "w+");
                fwrite($write_describe_theme, "$describe");

                // $write_index_theme = fopen("inf/note_{$title}-index.php", "w+");
                // fwrite($write_index_theme, "note");

                echo "<h4 id='thongbao'>Tạo Chủ Đề thành công!</h4>";
            }

            if ($theme === "bài đăng") {
                mkdir("post/$title");

                $write_describe_theme = fopen("inf/post_{$title}-describe.php", "w+");
                fwrite($write_describe_theme, "$describe");

                // $write_index_theme = fopen("inf/post_{$title}-index.php", "w+");
                // fwrite($write_index_theme, "");

                echo "<h4 id='thongbao'>Tạo Chủ Đề thành công!</h4>";
            }

            if ($theme === "câu chuyện") {
                mkdir("story/$title");

                $write_describe_theme = fopen("inf/story_{$title}-describe.php", "w+");
                fwrite($write_describe_theme, "$describe");

                // $write_index_theme = fopen("inf/story_{$title}-index.php", "w+");
                // fwrite($write_index_theme, "story");

                echo "<h4 id='thongbao'>Tạo Chủ Đề thành công!</h4>";
            }

            if ($theme === "") {
                if(!file_exists($title)) {
                    mkdir("$title");

                    $myFile = "inf/crt_main_theme.php";
                    $fh = fopen($myFile, 'a');
                    fwrite($fh, "<button><a href='$title.php'>$title</a></button>");
                    // Đường link dẫn đến trình tạo bài viết (Trình chưa được tạo)
                    fclose($fh);

                    $write_describe_theme = fopen("inf/theme_{$title}-describe.php", "w+");
                    fwrite($write_describe_theme, "$describe");

                    // $write_index_theme = fopen("inf/theme_{$title}-index.php", "w+");
                    // fwrite($write_index_theme, "story");

                    echo "<h4 id='thongbao'>Tạo Chủ Đề thành công!</h4>";
                } else {
                    echo "<h4 id='thongbao'>Tạo Chủ Đề thất bại do trùng tên!</h4>";
                }
            }
        }
    ?>

    <!-- Code tự động điền -->
    <div style="display:none">
        <?php
            $read_account = "account_name.php";
            $fp_read_account = fopen($read_account, "r");
            $contents_account = fread($fp_read_account, filesize($read_account));
            fclose($fp_read_account);

            if ($_SERVER['HTTP_REFERER']) {
                $link_ip = "http://localhost:8080";
                $web = $_SERVER['HTTP_REFERER'];
    
                if($web === "{$link_ip}/sunstation_write/server/account/{$contents_account}/post.php") {
                    echo "<span style='display:none' id='referer_text'>post</span>";
                }
                if($web === "{$link_ip}/sunstation_write/server/account/{$contents_account}/stories.php") {
                    echo "<span style='display:none' id='referer_text'>story</span>";
                }
            }
        ?>
    </div>

</div>

<?php
require "../../../includes/footer.php";
?>

</body>

<script>
    var post_input_theme = document.getElementById("post_input_theme");
    var referer_text = document.getElementById("referer_text");

    if (referer_text.innerHTML == "post") {
        post_input_theme.value = "bài đăng";
    }
    if (referer_text.innerHTML == "story") {
        post_input_theme.value = "câu chuyện";
    }

</script>
<script src="/sunstation_write/setting/shared_file/main.js"></script>
</html>