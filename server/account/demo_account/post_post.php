<?php
    require "includes/html_head.php";
?>

<!-- CSS -->
<link rel="stylesheet" href="style.css">

<title>Câu chuyện Hello</title>
</head>

<?php
    require "includes/style.php";
?>

<body>
<?php
require "includes/header.php";
?>

<div id="container">
    <h1></h1>

    <h2>Mô tả<h2>
    <p><p><br>
    <h2>Nội dung</h2><br>
    
    <?php
        $fp = fopen("all_post/hello.php", "r");
 
        while(! feof($fp)) {
            echo "<p class='indent'>".fgets($fp)."</p>";
        }
 
        fclose($fp);
    ?>

</div>

<?php
require "../../../includes/footer.php";
?>

</body>
<script src="/sunstation_write/setting/shared_file/main.js"></script>
</html>