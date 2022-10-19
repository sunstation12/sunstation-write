<?php
    require "../../includes/html_head.php";
?>

<!-- CSS -->
<style>
html {
    padding: calc(var(--header_height) + 26px) 50px 50px calc(20% + 26px);
}

#navigation {
    width: 20%;
    position: fixed;
    top: 0;
    left: 0;
    bottom: 0;
    z-index: 1;
    padding-top: calc(var(--header_height) + 12px);
    background-color: var(--blue_four);
    border-right: var(--header_border-bottom) solid var(--blue_two);
}

.nav_items {
    width: 100%;
    cursor: pointer;
    font-size: 28px;
    padding: 5px 12px;
    font-family: 'Barlow Condensed', sans-serif;
}

.nav_items a {
    text-decoration: none;
    color: #000000;
}

.nav_items:hover a {
    color: #ffffff;
}

.nav_items:hover {
    background-color: var(--blue_three);
}

.account_title {
    display: inline-block;
}

#account_name {
    font-size: 20px;
}

.account {
    padding: 8px 11px 12px;
    /* background-color: burlywood; */
    border-bottom: 2px solid var(--blue_three);
}

.user_name {
    font-size: 19px;
    display: inline-block;
    margin-right: 10px;
    color: var(--blue_three);
    font-family: 'Exo 2', sans-serif;
}

.account_name {
    color: var(--blue_one);
    margin-bottom: 5px;
    cursor: pointer;
}

.password {
    display: inline-block;
    padding: 1px 4px;
    font-size: 15px;
    border-radius: 5px;
    cursor: pointer;
    user-select: none;
    font-family: 'Dosis', sans-serif;
    background-color: var(--blue_four);
}

.btn_delete {
    margin-left: 20px;
    display: inline-block;
}

#dele_move {
    display: none;
    margin: 30px 0px 20px 0px;
}

#input_dele_move {
    margin-bottom: 15px;
}

#count_account {
    color: #ff0000;
    display: inline-block;
    margin-left: 14px;
    font-size: 27px;
    font-family: 'Dosis', sans-serif;
}
</style>

<title>Điều hành Web | Sun Station Write</title>
</head>
<body>
<?php
    require "../../includes/header.php";
?>

<?php
    require "../includes/navigation_bar.php";
?>

<h2 class="account_title">Tất cả tài khoản</h2>

<!-- <button class="btn_delete" type="submit" onclick="dele_move()">Di chuyển Tài Khoản vào thùng rác</button>
<button class="btn_delete" type="submit" onclick="dele_te()">Xóa Tài Khoản vĩnh viễn</button> -->

<!-- <form method="post" enctype="multipart/form-data">
    <button type="submit" name="delete">Xóa</button>
</form> -->
<!-- 
<div id="dele_move">
    <form method="post" enctype="multipart/form-data">
        <input id="input_dele_move" name="input_dele_move" type="text" placeholder="Chuyển vào thùng rác..." name="dele_move"><br>
        <button type="submit" name="delete">Chuyển</button>
        <button onclick="delete_cancel()">Hủy</button>
    </form>
</div> -->

<!-- <div id="container">
    
</div> -->

<?php
$count_account = "../../server/account/";
$filecount = 0;
$files = glob($count_account . "*");

if ($files){
    $filecount = count($files);
}

echo "<h2 id='count_account'>{$filecount}</h2>";

foreach (new DirectoryIterator('../../server/account') as $fileInfo)
{
    if($fileInfo->isDot()) continue;
    $account_name = $fileInfo->getFilename();

    $user_name = "../../server/account/{$account_name}/login_name.php";
    $fp_user_name = fopen($user_name, "r");
    $contents_user = fread($fp_user_name, filesize($user_name));
    fclose($fp_user_name);

    $password = "../../server/account/{$account_name}/password.php";
    $fp_password = fopen($password, "r");
    $contents_password = fread($fp_password, filesize($password));
    fclose($fp_password);
    
    echo "<div class='account'><div class='user_name'>{$contents_user}</div><h2 class='account_name'>{$account_name}</h2><div class='password'>{$contents_password}</div></div>", PHP_EOL;
}
?>

</body>
<script src="/sunstation_write/setting/shared_file/main.js"></script>
</html>