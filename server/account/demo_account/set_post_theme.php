<?php
    require "includes/html_head.php";
?>

<!-- CSS -->
<link rel="stylesheet" href="style.css">

<title>Chủ đề Bài viết | Sun Station Write</title>
</head>

<?php
    require "includes/style.php";
?>

<body>
<?php
require "includes/header.php";
?>

<div id="container">
    <h1>Chọn Chủ đề Bài viết của bạn</h1>
    <button id="btn_create_post">
        <a href="create_posts_theme.php">Tạo chủ đề mới</a>
    </button>
    
    <br><br>

    <button>
        <a href="create_posts_important.php">Quan Trọng</a>
    </button>
    <button>
        <a href="create_posts_note.php">Ghi Chú</a>
    </button>
    <button>
        <a href="create_posts_post.php">Bài Đăng</a>
    </button>
    <button>
        <a href="create_posts_story.php">Câu Chuyện</a>
    </button>

    <?php
        // require "inf/crt_main_theme.php";

        // Đọc nội dung trong file crt_main_theme.php
        $read_content_crt_theme = "inf/crt_main_theme.php";
        $fp_read_content_crt_theme = fopen($read_content_crt_theme, "r");
        $contents_content_crt_theme = fread($fp_read_content_crt_theme, filesize($read_content_crt_theme));
        fclose($fp_read_content_crt_theme);

        // Xử lí hiển thị: Nếu trong file chỉ có phần ngăn cách, không có link chủ đề user tạo thì không hiển thị nội dung
        if($contents_content_crt_theme === "<div id='bonus_theme'></div>") {
            echo "";
        } else {
            echo "$contents_content_crt_theme";
        }
    ?>

    <br><br><br>

    <p class="p_text_guide">Hệ thống sẽ không công khai những bài viết thuộc chủ đề <b>Quan Trọng</b> và <b>Ghi Chú</b>. Bạn có thể tùy chỉnh chế độ của những Bài Viết thuộc các chủ đề còn lại.</p>
</div>

<?php
require "../../../includes/footer.php";
?>
</body>
<script src="/sunstation_write/setting/shared_file/main.js"></script>
</html>