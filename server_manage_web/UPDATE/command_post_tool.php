<div id="command_post_tool" class="command_post_tool">
    <div title="Xuống dòng" onclick="cmd_post__enter()" name="cmd_post--enter"
        id="cmd_post--enter" class="cmd_post_items" style="margin-left:-5px"
    >br
    </div>
    <div title="Xuống đoạn mới" onclick="cmd_post__enter_two()" name="cmd_post--enter2"
        id="cmd_post--enter2" class="cmd_post_items"
    >brbr
    </div>
    <div title="Đề mục nhỏ" onclick="cmd_post__little_title()" name="cmd_post--little_title"
        id="cmd_post--little_title" class="cmd_post_items" style="margin-left:-5px"
    ><i class="fa-solid fa-heading"></i>
    </div>
    <div title="In đậm" onclick="cmd_post__bold()" name="cmd_post--bold"
        id="cmd_post--bold" class="cmd_post_items"
    >B
    </div>
    <div title="In nghiêng" onclick="cmd_post__italicized()" name="cmd_post--italicized"
        id="cmd_post--italicized" class="cmd_post_items" style="padding-right:8px"
    ><i>I
    </i></div>
    <div title="In vừa đậm vừa nghiêng" onclick="cmd_post__bold_italicized()" name="cmd_post--bold_italicized"
        id="cmd_post--bold_italicized" class="cmd_post_items" style="padding-right:8px"
    ><i>B
    </i></div>
    <div title="Gạch chân" onclick="cmd_post__underline()" name="cmd_post--underline"
        id="cmd_post--underline" class="cmd_post_items"
    >U
    </div>
    <div title="Chèn đường dẫn (Link)" onclick="cmd_post__link()" name="cmd_post--link"
        id="cmd_post--link" class="cmd_post_items"
    ><i class="fa-solid fa-link"></i>
    </div>
    <div title="Chèn ảnh" onclick="cmd_post__img()" name="cmd_post--img"
        id="cmd_post--img" class="cmd_post_items"
    ><i class="fa-regular fa-image"></i>
    </div>
    <div title="Tải bản xem trước" onclick="cmd_post__toggle_view()" name="cmd_post--toggle_view"
        id="cmd_post--toggle_view" class="cmd_post_items"
    ><i class="fa-solid fa-eye"></i>
    </div>

    <div class="word_count">
        <div class="word_count_items">
            Số ký tự:
            <div class="result_count_items" id="count_characters">0</div>
        </div>
        <div class="word_count_items">
            Số từ:
            <div class="result_count_items" id="count_word">0</div>
        </div>
    </div>

    <div id="cmd_add--toggle_view">
        <div title="Tắt cửa sổ Toggle View" onclick="close__cmd_add_toggle_view()" id="close--cmd_add_toggle_view">
            <i class="fa-solid fa-eye-slash"></i>
        </div>
        <div class="css_post_tag_div_UPDATE" id="cmd--toggle_view"></div>
    </div>

    <div id="command_post_tool_help">
        <div title="Tắt cửa sổ" onclick="close__command_post_tool_help()" id="close--command_post_tool_help">
            <i class="fa-solid fa-eye-slash"></i>
        </div>
        <div class="cmd_add_items" id="cmd_add--little_title">
            <p>Nhập nội dung đề mục nhỏ:</p>
            <input id="input_add--little_title" name="input_add--little_title" autocomplete="off" required>
            <button id="btn_add--little_title" onclick="btn_add__little_title()" name="btn_add--little_title">Thêm</button>
        </div>
        <div class="cmd_add_items" id="cmd_add--bold">
            <p>Nhập từ cần in Đậm:</p>
            <input id="input_add--bold" name="input_add--bold" autocomplete="off" required>
            <button id="btn_add--bold" onclick="btn_add__bold()" name="btn_add--bold">Thêm</button>
        </div>
        <div class="cmd_add_items" id="cmd_add--italicized">
            <p>Nhập từ cần in Nghiêng:</p>
            <input id="input_add--italicized" name="input_add--italicized" autocomplete="off" required>
            <button id="btn_add--italicized" onclick="btn_add__italicized()" name="btn_add--italicized">Thêm</button>
        </div>
        <div class="cmd_add_items" id="cmd_add--bold_italicized">
            <p>Nhập từ cần in Đậm và Nghiêng:</p>
            <input id="input_add--bold_italicized" name="input_add--bold_italicized" autocomplete="off" required>
            <button id="btn_add--bold_italicized" onclick="btn_add__bold_italicized()" name="btn_add--bold_italicized">Thêm</button>
        </div>
        <div class="cmd_add_items" id="cmd_add--underline">
            <p>Nhập từ cần Gạch Chân:</p>
            <input id="input_add--underline" name="input_add--underline" autocomplete="off" required>
            <button id="btn_add--underline" onclick="btn_add__underline()" name="btn_add--underline">Thêm</button>
        </div>
        <div class="cmd_add_items" id="cmd_add--link">
            <p>Chèn đường Link (URL):</p>
            <input placeholder="Nhập từ để hiển thị" id="input_add--word_link" name="input_add--word_link" autocomplete="off" required>
            <input placeholder="Nhập đường link cần đến" id="input_add--link" name="input_add--link" autocomplete="off" required>
            <button id="btn_add--link" onclick="btn_add__link()" name="btn_add--link">Thêm</button>
        </div>
        <div class="cmd_add_items" id="cmd_add--img">
            <p>Chèn ảnh: (Chỉ hỗ trợ chèn ảnh qua Link, không hỗ trợ Tải lên Ảnh)</p>
            <input placeholder="Nhập Link (URL) ảnh" id="input_add--img" name="input_add--img" autocomplete="off" required>
            <button id="btn_add--img" onclick="btn_add__img()" name="btn_add--img">Thêm</button>
        </div>
    </div>
</div>