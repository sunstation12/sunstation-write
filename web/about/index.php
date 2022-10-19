<?php
    require "../../includes/html_head.php";
?>
<!-- CSS -->
<link rel="stylesheet" href="/sunstation_write/setting/main_file/about.css">

<title>Về chúng tôi | Sun Station Write</title>
</head>
<body>
<?php
require "../../includes/header.php";
?>

<div id="container">
    <h1>Thông tin về Sun Station</h1><br>
    <h2 style="display:inline-block;margin-right:6px">Ngày thành lập:</h2>
    <h3 title="Đã được xác minh!" style="display:inline-block;color:blue">05/02/2019</h3><br><br>
    <h2>Thành viên:</h2>
    <h3 style="color:blue;">
        <ol style="margin-left:26px;margin-top:5px;">
            <li>Việt</li>
            <li>Ánh</li>
            <li>Chíp</li>
        </ol>
    </h3><br><br>
    <h2 style="display:inline-block;margin-right:6px;">Lĩnh vực:</h2>
    <h3 style="display:inline-block;color:blue">Làm truyện ngắn, phim, video giải trí, Vlog,...</h3><br><br><br><br>

    <h1>Thông tin về Web</h1><br>
    <h2 style="display:inline-block;margin-right:6px">Số lượng Tài khoản:</h2>
    <?php
        $count_post = "../../server/account/";
        $filecount = 0;
        $files = glob($count_post . "*");
        
        if ($files){
            $filecount = count($files);
            echo "<h3 style='display:inline-block;color:blue'>$filecount</h3>";
        }
    ?><br><br>
    <h2 style="display:inline-block;margin-right:6px">Tổng số bài viết đã tạo:</h2>
    <?php
        $count_post = "../post/all_post/";
        $filecount = 0;
        $files = glob($count_post . "*");
        
        if ($files){
            $filecount = count($files);
            echo "<h3 style='display:inline-block;color:blue'>$filecount</h3>";
        }
        
        
    ?><br><br>
    <h2 style="display:inline-block;margin-right:6px">Số bài viết công khai:</h2>
    <?php

    ?><br><br>
    <h2 style="display:inline-block;margin-right:6px">Tuổi:</h2>
    <?php
        $first_date = strtotime('2022-08-08');
        $second_date = strtotime(date("Y-m-d"));
        $datediff = abs($first_date - $second_date);
        $newdate = floor($datediff / (60*60*24));
        
        echo "<h3 style='display:inline-block;color:blue'>$newdate ngày tuổi</h3>"
    ?><br><br>
    <h2 style="display:inline-block;margin-right:6px">
        Bảng màu:
        <h3 style='display:inline-block;color:blue'>
            <a style='display:inline-block;color:blue' href="https://color.adobe.com/Sun-Station-Write-Color-Default-color-theme-20513897/" target="_blank">Link</a>
        </h3>
    </h2>
    <br><br>
    <h2 style="display:inline-block;margin-right:6px">
        Phông chữ:
        <h3 style='display:inline-block;color:blue'>
            <a style='display:inline-block;color:blue' href="https://fonts.googleapis.com/css2?family=Alata&family=Bahianita&family=Barlow+Condensed&family=Dosis:wght@500&family=Exo+2&family=Fira+Sans&family=Itim&family=Kanit&family=Mitr&family=Monda&family=Patrick+Hand&family=Roboto&family=Signika&family=Signika+Negative&family=Varela+Round&family=Yanone+Kaffeesatz&display=swap" target="_blank">Link</a>
        </h3>
    </h2>
    <br><br>

    <div id="logo_img_sunstation">
        <img title="Logo chính thức của Sun Station" src="../../server/material/sun_station_logo.png">
    </div>

    </div>
    
</div>

<?php
require "../../includes/footer.php";
?>
</body>
<script src="/sunstation_write/setting/shared_file/main.js"></script>
</html>