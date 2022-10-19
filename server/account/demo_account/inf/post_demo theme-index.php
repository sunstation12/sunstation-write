<?php require "../includes/html_head.php";?>
<!-- CSS -->
<link rel="stylesheet" href="style.css">
<title>Chủ đề Bài Đăng / $title | Sun Station Write</title>
</head>
<?php
    require "../includes/style.php";
?>
<body>
    <?php require "../includes/header.php";?>
    <div id="container">
        <h1>Bài Đăng / $title</h2>
        <button id="btn_create_post">
            <a href="../set_post_theme.php">Tạo bài viết</a>
        </button>
        <h2 style="margin-bottom: 13px;">Tất cả Bài viết trong chủ đề:</h2>
        <?php
            require "includes_php/all_post.php";
        ?>
        <h2>Mô tả của Chủ đề:</h2>
        <p>
            <?php
                $read_describe = "post_$title-describe.php";
                $fp_read_describe = fopen($read_describe, "r");
                $contents_describe = fread($fp_read_describe, filesize($read_describe));
                fclose($fp_read_describe);
                echo "$contents_describe";
            ?>
        </p>
    </div>
    <?php
        require "../../../../includes/footer.php";
    ?>
</body>
<script src="/sunstation_write/setting/shared_file/main.js"></script>
</html>