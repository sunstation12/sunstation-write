<?php
    require "../../includes/html_head.php";
?>
<!-- CSS -->
<link rel="stylesheet" href="/sunstation_write/setting/main_file/post.css">

<title>Bài viết | Sun Station Write</title>
</head>
<body>
<?php
require "../../includes/header.php";
?>

<div id="container">
    <h1>Tất cả bài viết</h1>

    <form class="form_search_box" method="post" entype="multipart/form-data">
        <input name="input_post_search" placeholder="Tìm kiếm bài viết ...">
        <button name="btn_post_search">Tìm kiếm</button>
    </form>

    <!-- Chức năng Khung Tìm Kiếm -->
    <?php
        // if(isset($_POST['btn_post_search']))
        // {
        //     post_search();
        // }
        // function post_search()
        // {
        //     $input_post_search = $_POST['input_post_search'];
        //     $link_search = "unbin";
        //     if(file_exists("$link_search/$input_post_search")) {

        //         $read_content = "$link_search/$input_post_search";
        //         $fp_read_content = fopen($read_content, "r");
        //         $contents_content = fread($fp_read_content, filesize($read_content));
        //         fclose($fp_read_content);

        //         echo "<a href='all_post/$contents_content' id='thongbao'>Nhấn vào đây</a>";
        //     }
        // }

        // Nếu người dùng submit form thì thực hiện
        
    ?>

    <?php
        // $count_post = "all_post/";
        // $filecount = 0;
        // $files = glob($count_post . "*");
        
        // if ($files){
        //     $filecount = count($files);
        // }
        
        // echo "<h2 id='count_post'>{$filecount}</h2>";
    ?>

    <?php
        foreach (new DirectoryIterator('all_post') as $fileInfo)
        {
            if($fileInfo->isDot()) continue;
            $post_name = $fileInfo->getFilename();

            $post = "all_post/{$post_name}";

            $account_name = "{$post}/account_name";
            $fp_account_name = fopen($account_name, "r");
            $contents_account = fread($fp_account_name, filesize($account_name));
            fclose($fp_account_name);

            $posts_name = "{$post}/post_name";
            $fp_posts_name = fopen($posts_name, "r");
            $contents_posts = fread($fp_posts_name, filesize($posts_name));
            fclose($fp_posts_name);
            
            $post_content = "{$post}/content.php";
            $fp_post_content = fopen($post_content, "r");
            $contents_content = fread($fp_post_content, filesize($post_content));
            fclose($fp_post_content);

            $post_describe = "{$post}/describe.php";
            $fp_post_describe = fopen($post_describe, "r");
            $contents_describe = fread($fp_post_describe, filesize($post_describe));
            fclose($fp_post_describe);

            $post_theme = "{$post}/post_theme";
            $fp_post_theme = fopen($post_theme, "r");
            $contents_post_theme = fread($fp_post_theme, filesize($post_theme));
            fclose($fp_post_theme);

            $posts_mode = "{$post}/post_mode";
            $fp_posts_mode = fopen($posts_mode, "r");
            $contents_mode = fread($fp_posts_mode, filesize($posts_mode));
            fclose($fp_posts_mode);

            $str = "{$contents_describe} . {$contents_content}";
            $count_crt = strlen($str);
            $count_time = $count_crt / 1450;
            $read_time = round($count_time);

            if($contents_mode === "public") {
                echo "<div class='post'><div class='user_name'>{$contents_account}</div><span class='count_read_time'>{$read_time} phút đọc</span><div class='post_theme'>{$contents_post_theme}</div><a href='all_post/$post_name' class='post_link'><h2 class='post_name'>{$contents_posts}</h2></a><div class='post_time'><div class='describe_shortcut'>{$contents_describe}</div></div></div>";
            }
        }
    ?>

</div>

<?php
require "../../includes/footer.php";
?>
</body>
<script src="/sunstation_write/setting/shared_file/main.js"></script>
</html>