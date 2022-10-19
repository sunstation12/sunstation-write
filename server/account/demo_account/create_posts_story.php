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
    <h1>Bài Viết chủ đề Câu Chuyện</h1>

    <form method="post" entype="multipart/form-data">
        <h3>Tiêu đề</h3>
        <input name="post_input_title" required>
        <h3>Mô tả</h3>
        <textarea class="post_input_describe" name="post_input_describe"></textarea>
        <h3>Nội dung Bài Viết</h3>
        <textarea class="post_input_content" name="post_input_content" required></textarea>
        <h3>Chế độ bài viết</h3>
        <input value="công khai" id="public_mode" class="post_mode" name="post_mode" name="public_mode" type="radio" required>
        <p class="post_label_title">
            <label for="public_mode">Công khai</label>
        </p>
        <input value="riêng tư" id="private_mode" class="post_mode" name="post_mode" name="private_mode" type="radio" required>
        <p class="post_label_title">
            <label for="private_mode">Riêng Tư</label>
        </p><br><br>
        <button id="btn_post" name="btn_post">Đăng bài</button><br><br>
    </form>
</div>

<?php
require "../../../includes/footer.php";
?>

<?php
    if(isset($_POST['btn_post']))
    {
        post_crt();
    }
    function post_crt()
    {
        $title = $_POST['post_input_title'];
    }
?>

</body>
<script src="/sunstation_write/setting/shared_file/main.js"></script>
</html>