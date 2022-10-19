function btn_start_home() {
    var choice = confirm("Hãy đăng nhập để bắt đầu tạo Bài Viết!");

    if(choice == true) {
        window.location = "/sunstation_write/web/sign_in";
    }
}