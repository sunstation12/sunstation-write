<script>
    var input = document.getElementById("post_input_content");

    function cmd_post__enter() {
        input.value = input.value + "<br>";

        const nodeList = document.querySelectorAll(".cmd_add_items");
        for (let i = 0; i < nodeList.length; i++) {
            nodeList[i].style.display = "none";
        }
        
        document.getElementById("command_post_tool_help").style.display = "none";
    }

    function cmd_post__enter_two() {
        input.value = input.value + "<br><br>";
        
        const nodeList = document.querySelectorAll(".cmd_add_items");
        for (let i = 0; i < nodeList.length; i++) {
            nodeList[i].style.display = "none";
        }
        
        document.getElementById("command_post_tool_help").style.display = "none";
    }

    function cmd_post__little_title() {
        const nodeList = document.querySelectorAll(".cmd_add_items");
        for (let i = 0; i < nodeList.length; i++) {
            nodeList[i].style.display = "none";
        }

        document.getElementById("command_post_tool_help").style.display = "block";
        document.getElementById("cmd_add--little_title").style.display = "block";
    }

    function cmd_post__bold() {
        const nodeList = document.querySelectorAll(".cmd_add_items");
        for (let i = 0; i < nodeList.length; i++) {
            nodeList[i].style.display = "none";
        }

        document.getElementById("command_post_tool_help").style.display = "block";
        document.getElementById("cmd_add--bold").style.display = "block";
    }

    function cmd_post__italicized() {
        const nodeList = document.querySelectorAll(".cmd_add_items");
        for (let i = 0; i < nodeList.length; i++) {
            nodeList[i].style.display = "none";
        }
        
        document.getElementById("command_post_tool_help").style.display = "block";
        document.getElementById("cmd_add--italicized").style.display = "block";
    }

    function cmd_post__bold_italicized() {
        const nodeList = document.querySelectorAll(".cmd_add_items");
        for (let i = 0; i < nodeList.length; i++) {
            nodeList[i].style.display = "none";
        }
        
        document.getElementById("command_post_tool_help").style.display = "block";
        document.getElementById("cmd_add--bold_italicized").style.display = "block";
    }

    function cmd_post__underline() {
        const nodeList = document.querySelectorAll(".cmd_add_items");
        for (let i = 0; i < nodeList.length; i++) {
            nodeList[i].style.display = "none";
        }
        
        document.getElementById("command_post_tool_help").style.display = "block";
        document.getElementById("cmd_add--underline").style.display = "block";
    }

    function cmd_post__link() {
        const nodeList = document.querySelectorAll(".cmd_add_items");
        for (let i = 0; i < nodeList.length; i++) {
            nodeList[i].style.display = "none";
        }
        
        document.getElementById("command_post_tool_help").style.display = "block";
        document.getElementById("cmd_add--link").style.display = "block";
    }

    function cmd_post__img() {
        const nodeList = document.querySelectorAll(".cmd_add_items");
        for (let i = 0; i < nodeList.length; i++) {
            nodeList[i].style.display = "none";
        }
        
        document.getElementById("command_post_tool_help").style.display = "block";
        document.getElementById("cmd_add--img").style.display = "block";
    }

    function cmd_post__toggle_view() {        
        input.style.width = "50%";
        input.style.maxWidth = "50%";
        document.getElementById("cmd_add--toggle_view").style.display = "block";
    }


    function close__command_post_tool_help() {
        const nodeList = document.querySelectorAll(".cmd_add_items");
        for (let i = 0; i < nodeList.length; i++) {
            nodeList[i].style.display = "none";
        }
        
        document.getElementById("command_post_tool_help").style.display = "none";
    }

    function close__cmd_add_toggle_view() {        
        input.style.width = "100%";
        input.style.maxWidth = "100%";
        document.getElementById("cmd_add--toggle_view").style.display = "none";
    }
</script>

<script>
    var input = document.getElementById("post_input_content");

    function btn_add__little_title() {
        var input_add = document.getElementById("input_add--little_title");
        input.value = input.value + "<span>" + input_add.value + "</span>";

        const nodeList = document.querySelectorAll(".cmd_add_items");
        for (let i = 0; i < nodeList.length; i++) {
            nodeList[i].style.display = "none";
        }
            
        document.getElementById("command_post_tool_help").style.display = "none";
    }

    function btn_add__bold() {
        var input_add = document.getElementById("input_add--bold");
        input.value = input.value + "<b>" + input_add.value + "</b>";

        const nodeList = document.querySelectorAll(".cmd_add_items");
        for (let i = 0; i < nodeList.length; i++) {
            nodeList[i].style.display = "none";
        }
            
        document.getElementById("command_post_tool_help").style.display = "none";
    }

    function btn_add__italicized() {
        var input_add = document.getElementById("input_add--italicized");
        input.value = input.value + "<i>" + input_add.value + "</i>";

        const nodeList = document.querySelectorAll(".cmd_add_items");
        for (let i = 0; i < nodeList.length; i++) {
            nodeList[i].style.display = "none";
        }
            
        document.getElementById("command_post_tool_help").style.display = "none";
    }

    function btn_add__bold_italicized() {
        var input_add = document.getElementById("input_add--bold_italicized");
        input.value = input.value + "<b><i>" + input_add.value + "</i></b>";

        const nodeList = document.querySelectorAll(".cmd_add_items");
        for (let i = 0; i < nodeList.length; i++) {
            nodeList[i].style.display = "none";
        }
            
        document.getElementById("command_post_tool_help").style.display = "none";
    }

    function btn_add__underline() {
        var input_add = document.getElementById("input_add--underline");
        input.value = input.value + "<u>" + input_add.value + "</u>";

        const nodeList = document.querySelectorAll(".cmd_add_items");
        for (let i = 0; i < nodeList.length; i++) {
            nodeList[i].style.display = "none";
        }
            
        document.getElementById("command_post_tool_help").style.display = "none";
    }

    function btn_add__link() {
        var input_add_word = document.getElementById("input_add--word_link");
        var input_add = document.getElementById("input_add--link");
        input.value = input.value + '<a href="' + input_add.value + '">' + input_add_word.value + "</a>";

        const nodeList = document.querySelectorAll(".cmd_add_items");
        for (let i = 0; i < nodeList.length; i++) {
            nodeList[i].style.display = "none";
        }
            
        document.getElementById("command_post_tool_help").style.display = "none";
    }

    function btn_add__img() {
        var input_add = document.getElementById("input_add--img");
        input.value = input.value + '<img src="' + input_add.value + '">';

        const nodeList = document.querySelectorAll(".cmd_add_items");
        for (let i = 0; i < nodeList.length; i++) {
            nodeList[i].style.display = "none";
        }
            
        document.getElementById("command_post_tool_help").style.display = "none";
    }
</script>

<script>
    document.getElementById("post_input_content").oninput = function() {
        var inputarea = document.getElementById("post_input_content");
        var area = inputarea.value.replace(/\r?\n/g, "");
        var cleanText = area.replace(/<\/?[^>]+(>|$)/g, "");

        document.getElementById("count_characters").innerHTML = cleanText.length;

        str1= inputarea.value;
		str1 = str1.replace(/(^\s*)|(\s*$)/gi,"");
		str1 = str1.replace(/[ ]{2,}/gi," ");
		str1 = str1.replace(/\n /,"\n");

		document.getElementById("count_word").innerHTML = str1.split(' ').length;

        if(inputarea.value == "") {
            document.getElementById("count_characters").innerHTML = "0";
            document.getElementById("count_word").innerHTML = "0";
        }

        document.getElementById("cmd--toggle_view").innerHTML = inputarea.value;
    }
</script>