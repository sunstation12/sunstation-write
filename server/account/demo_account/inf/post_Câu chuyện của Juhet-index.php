<?php
    require "../includes/html_head.php";
?>

<!-- CSS -->
<link rel="stylesheet" href="style.css">

<title>Chủ đề Bài Đăng / Câu chuyện của Juhet | Sun Station Write</title>
</head>

<?php
    require "../includes/style.php";
?>

<body>
<?php
require "../includes/header.php";
?>

<div id="container">
    <h1>Bài Đăng / Câu chuyện của Juhet</h2>
    <button id="btn_create_post">
        <a href="../set_post_theme.php">Tạo bài viết</a>
    </button>
    <h2 style="
    margin-bottom: 13px;
    ">Tất cả Bài viết trong chủ đề:</h2>
    
    <?php
        foreach (new DirectoryIterator('../post/Câu chuyện của Juhet') as $fileInfo)
        {
            if($fileInfo->isDot()) continue;
            $post_name = $fileInfo->getFilename();

            echo "<a href='post_$post_name-index.php'><button>$post_name</button></a>";
        }
    ?>

    <h2>Mô tả của Chủ đề:</h2>
    <p>
        <?php
            $read_describe = "post_Câu chuyện của Juhet-describe.php";
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




<?php
    require '../includes/html_head.php';
?>

<!-- CSS -->
<link rel='stylesheet' href='style.css'>

<title>Chủ đề Bài Đăng / Câu chuyện của Juhet | Sun Station Write</title>
</head>

<?php
    require '../includes/style.php';
?>

<body>
<?php
require '../includes/header.php';
?>

<div id='container'>
    <h1>Bài Đăng / Câu chuyện của Juhet</h2>
    <button id='btn_create_post'>
        <a href='../set_post_theme.php'>Tạo bài viết</a>
    </button>
    <h2 style='
    margin-bottom: 13px;
    '>Tất cả Bài viết trong chủ đề:</h2>
    
    <?php
        foreach (new DirectoryIterator('../post/Câu chuyện của Juhet') as $fileInfo)
        {
            if($fileInfo->isDot()) continue;
            $post_name = $fileInfo->getFilename();

            echo '<a href="post_$post_name-index.php"><button>$post_name</button></a>';
        }
    ?>

    <h2>Mô tả của Chủ đề:</h2>
    <p>
        <?php
            $read_describe = 'post_Câu chuyện của Juhet-describe.php';
            $fp_read_describe = fopen($read_describe, 'r');
            $contents_describe = fread($fp_read_describe, filesize($read_describe));
            fclose($fp_read_describe);

            echo '$contents_describe';
        ?>
    </p>
</div>

<?php
require '../../../../includes/footer.php';
?>

</body>
<script src='/sunstation_write/setting/shared_file/main.js'></script>
</html>


<?php require '../includes/html_head.php';?><!-- CSS --><link rel='stylesheet' href='style.css'><title>Chủ đề Bài Đăng / Câu chuyện của Juhet | Sun Station Write</title></head><?php require '../includes/style.php';?><body><?php require '../includes/header.php';?><div id='container'><h1>Bài Đăng / Câu chuyện của Juhet</h2><button id='btn_create_post'><a href='../set_post_theme.php'>Tạo bài viết</a></button><h2 style='margin-bottom: 13px;'>Tất cả Bài viết trong chủ đề:</h2><?php foreach (new DirectoryIterator('../post/Câu chuyện của Juhet') as $fileInfo){if($fileInfo->isDot()) continue;$post_name = $fileInfo->getFilename();echo '<a href="post_$post_name-index.php"><button>$post_name</button></a>';}?><h2>Mô tả của Chủ đề:</h2><p><?php $read_describe = 'post_Câu chuyện của Juhet-describe.php';$fp_read_describe = fopen($read_describe, 'r');$contents_describe = fread($fp_read_describe, filesize($read_describe));fclose($fp_read_describe);echo '$contents_describe';?></p></div><?php require '../../../../includes/footer.php';?></body><script src='/sunstation_write/setting/shared_file/main.js'></script></html>