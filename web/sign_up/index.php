<?php
    require "../../includes/html_head.php";
?>
<!-- CSS -->
    <link rel="stylesheet" href="/sunstation_write/setting/main_file/form.css">

<title>Đăng kí Tài Khoản | Sun Station Write</title>
</head>
<body>
<?php
require "../../includes/header.php";
?>

<div id="container">
    <h1>Đăng kí</h1>
    <form action="../notiffication/sign_up.php" method="post" enctype="multipart/form-data">
        <div class="form_theme">
            <label for="account_name">
                <h3>Tên tài khoản</h3>
            </label><br>
            <input type="text" placeholder="Tên tài khoản của bạn..." id="account_name" name="account_name" autocomplete="off" required>
        </div>
        <div class="form_theme">
            <label for="login_name">
                <h3>Tên đăng nhập</h3>
            </label><br>
            <input type="text" placeholder="Tên của bạn..." id="login_name" name="login_name" autocomplete="off" required>
        </div>
        <div class="form_theme">
            <label for="password">
                <h3>Mật khẩu</h3>
            </label><br>
            <input type="password" placeholder="Mật khẩu của bạn..." id="password" name="password" required>
        </div>
        
        <button type="submit" name="sign_up">Đăng kí</button>
    </form>
    <div id="link_sign">
        <div>Bạn đã có tài khoản?</div>
        <a id="link_sign_a" href="/sunstation_write/web/sign_in/">Đăng nhập</a>
    </div>
</div>

<?php
require "../../includes/footer.php";
?>
</body>
<script src="/sunstation_write/setting/shared_file/main.js"></script>
</html>