<?php
    require "../../../includes/html_head.php";
?>
<!-- CSS -->
<link rel="stylesheet" href="/sunstation_write/setting/main_file/post.css">

<title>Bài viết | Sun Station Write</title>
</head>
<body>
<?php
require "../../../includes/header.php";
?>

<div id="container">
    <h1>Tất cả bài viết</h1>

    <?php
        $count_post = "all_post_post/";
        $filecount = 0;
        $files = glob($count_post . "*");
        
        if ($files){
            $filecount = count($files);
        }
        
        echo "<h2 id='count_post'>{$filecount}</h2>";
    ?>

    <?php
        foreach (new DirectoryIterator('all_post_post') as $fileInfo)
        {
            if($fileInfo->isDot()) continue;
            $post_name = $fileInfo->getFilename();

            $post = "all_post_post/{$post_name}";

            $account_name = "{$post}/account_name";
            $fp_account_name = fopen($account_name, "r");
            $contents_account = fread($fp_account_name, filesize($account_name));
            fclose($fp_account_name);

            $describe = "{$post}/describe";
            $fp_describe = fopen($describe, "r");
            $contents_describe = fread($fp_describe, filesize($describe));
            fclose($fp_describe);

            $post_theme = "{$post}/post_theme";
            $fp_post_theme = fopen($post_theme, "r");
            $contents_post_theme = fread($fp_post_theme, filesize($post_theme));
            fclose($fp_post_theme);
            
            echo "<div class='post'><div class='user_name'>{$contents_account}</div><div class='post_theme'>{$contents_post_theme}</div><h2 class='post_name'>{$post_name}</h2><div class='post_time'>{$contents_describe}</div></div>";
        }
    ?>

</div>

<?php
require "../../../includes/footer.php";
?>
</body>
<script src="/sunstation_write/setting/shared_file/main.js"></script>
</html>