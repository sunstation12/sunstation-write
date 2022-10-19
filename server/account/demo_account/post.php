<?php
    require "includes/html_head.php";
?>

<!-- CSS -->
<link rel="stylesheet" href="style.css">

<title>Chủ đề Bài Đăng | Sun Station Write</title>
</head>

<?php
    require "includes/style.php";
?>

<body>
<?php
require "includes/header.php";
?>

<div id="container">
    <h1>Chủ đề Bài Đăng</h2>
    <button id="btn_create_post">
        <a href="create_posts_theme.php">Tạo chủ đề mới</a>
    </button>
    <div>
        <h2 style="
        margin-bottom: 13px;
        ">Chủ đề đã tạo của bạn:</h2>
        
        <?php
            foreach (new DirectoryIterator('post') as $fileInfo)
            {
                if($fileInfo->isDot()) continue;
                $post_name = $fileInfo->getFilename();
    
                echo "<a href='inf/post_$post_name-index.php'><button>$post_name</button></a>";
                
                // echo "<div><h1>$contents_theme</h1><h2>$contents_content</h2></div>", PHP_EOL;
            }
        ?>
    </div>
</div>

<?php
require "../../../includes/footer.php";
?>

</body>
<script src="/sunstation_write/setting/shared_file/main.js"></script>
</html>