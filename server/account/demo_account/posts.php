<?php
    require "includes/html_head.php";
?>

<!-- CSS -->
<link rel="stylesheet" href="style.css">

<title>Bài viết | Sun Station Write</title>
</head>

<?php
    require "includes/style.php";
?>

<body>
<?php
require "includes/header.php";
?>

<div id="container">
    <h1>Bài viết của bạn</h1>
    <button id="btn_create_post">
        <a href="set_post_theme.php">Tạo bài viết</a>
    </button>

    <?php
        // $count_post = "post/";
        // $filecount = 0;
        // $files = glob($count_post . "*");
        
        // if ($files){
        //     $filecount = count($files);
        // }
        
        // echo "<h2 id='count_post'>{$filecount}</h2>";
    ?>

    <?php
        foreach (new DirectoryIterator('../../../web/post/all_post') as $fileInfo)
        {
            if($fileInfo->isDot()) continue;
            $post_name = $fileInfo->getFilename();

            $account_name = "../../../web/post/all_post/{$post_name}/account_name";
            $fp_account_name = fopen($account_name, "r");
            $contents_account = fread($fp_account_name, filesize($account_name));
            fclose($fp_account_name);

            $get_account_name = "account_name.php";
            $fp_get_account_name = fopen($get_account_name, "r");
            $contents_get_account = fread($fp_get_account_name, filesize($get_account_name));
            fclose($fp_get_account_name);

            $posts_name = "../../../web/post/all_post/{$post_name}/post_name";
            $fp_posts_name = fopen($posts_name, "r");
            $contents_name = fread($fp_posts_name, filesize($posts_name));
            fclose($fp_posts_name);

            $post_content = "../../../web/post/all_post/{$post_name}/content.php";
            $fp_post_content = fopen($post_content, "r");
            $contents_content = fread($fp_post_content, filesize($post_content));
            fclose($fp_post_content);

            $post_describe = "../../../web/post/all_post/{$post_name}/describe.php";
            $fp_post_describe = fopen($post_describe, "r");
            $contents_describe = fread($fp_post_describe, filesize($post_describe));
            fclose($fp_post_describe);

            $theme_name = "../../../web/post/all_post/{$post_name}/post_theme";
            $fp_theme_name = fopen($theme_name, "r");
            $contents_theme = fread($fp_theme_name, filesize($theme_name));
            fclose($fp_theme_name);

            $post_mode_name = "../../../web/post/all_post/{$post_name}/post_mode";
            $fp_post_mode_name = fopen($post_mode_name, "r");
            $contents_post_mode = fread($fp_post_mode_name, filesize($post_mode_name));
            fclose($fp_post_mode_name);

            $str = "{$contents_describe} . {$contents_content}";
            $count_crt = strlen($str);
            $count_time = $count_crt / 1450;
            $read_time = round($count_time);
    
            if ($contents_account === "{$contents_get_account}") {
                if ($contents_post_mode === "public") {
                    echo "<div class='post'><div class='user_name'>Công khai</div><div class='post_theme'>{$contents_theme}</div><span class='count_read_time'>{$read_time} phút đọc</span><a style='text-decoration: none; color: black;' href='edit_post.php'><i title='Chỉnh sửa bài viết' class='fa-solid fa-pen-to-square'></i></a><a href='../../../web/post/all_post/$post_name' class='post_link'><h2 class='post_name'>{$contents_name}</h2></a><div class='post_time'><div class='describe_shortcut'>{$contents_describe}</div></div></div>", PHP_EOL;
                }
                if ($contents_post_mode === "private") {
                    echo "<div class='post'><div class='user_name'>Riêng tư</div><div class='post_theme'>{$contents_theme}</div><span class='count_read_time'>{$read_time} phút đọc</span><a style='text-decoration: none; color: black;' href='edit_post.php'><i title='Chỉnh sửa bài viết' class='fa-solid fa-pen-to-square'></i></a><a href='../../../web/post/all_post/$post_name' class='post_link'><h2 class='post_name'>{$contents_name}</h2></a><div class='post_time'><div class='describe_shortcut'>{$contents_describe}</div></div></div>", PHP_EOL;
                }
            }
            
            // echo "<div><h1>$contents_theme</h1><h2>$contents_content</h2></div>", PHP_EOL;
        }
    ?>


</div>

<!-- <div class='post'>
    <div class='user_name'>{$contents_post_mode}</div>
    <div class='post_theme'>{$contents_theme}</div>
    <span class='count_read_time'>{$read_time} phút đọc</span>
    
    <a href='all_post/$post_name' class='post_link'>
        <h2 class='post_name'>{$contents_name}</h2>
    </a>
    <div class='post_time'>
        <div class='describe_shortcut'>{$contents_describe}</div>
    </div>
</div> -->

<?php
    
?>

<?php
require "../../../includes/footer.php";
?>

</body>
<script src="/sunstation_write/setting/shared_file/main.js"></script>
</html>