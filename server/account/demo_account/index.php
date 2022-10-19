<?php
    require "includes/html_head.php";
?>

<!-- CSS -->
<link rel="stylesheet" href="/sunstation_write/setting/main_file/home.css">
<link rel="stylesheet" href="style.css">

<title>Trang Chủ | Sun Station Write</title>
</head>

<?php
    require "includes/style.php";
?>

<body>
<?php
require "includes/header.php";
?>

<div id="container">
    <div class="hello_user" id="hour">
        
    </div>
    <?php
        $read_account_name = "user_name.php";
        $fp_read_account_name = fopen($read_account_name, "r");
        $contents_account_name = fread($fp_read_account_name, filesize($read_account_name));
        fclose($fp_read_account_name);

        echo "<div class='hello_user'>$contents_account_name!</div>";
    ?>
    <div id="website_home_name">Sun Station Write</div>
    <div id="btn_start_home_div">
        <button onclick="btn_start_home()">Bắt đầu tạo Bài Viết</button>
    </div>
</div>

<?php
require "../../../includes/footer.php";
?>
</body>
<script>
    function btn_start_home() {
        window.location = "set_post_theme.php";
    }
</script>
<script>
    var today = new Date();
    var hour = today.getHours();

    if(hour >= 1) {
        document.getElementById("hour").innerHTML = "Chào buổi sáng,";
    }
    if(hour >= 11) {
        document.getElementById("hour").innerHTML = "Chào buổi trưa,";
    }
    if(hour >= 13) {
        document.getElementById("hour").innerHTML = "Chào buổi chiều,";
    }
    if(hour >= 19) {
        document.getElementById("hour").innerHTML = "Chào buổi tối,";
    }
</script>
<script src="/sunstation_write/setting/shared_file/main.js"></script>
</html>