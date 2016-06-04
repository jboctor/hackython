<?php

?>
<html>
    <head>
        <script type="text/javascript" src="jquery-2.2.4.min.js"></script>
        <script type="text/javascript">
            $(function () {
                var current_char = "0";
                var count = 0;
                $(window).on("keypress", function (event) {
                    pressed_char = String.fromCharCode(event.charCode);
                    console.log(typeof pressed_char);
                    if (typeof pressed_char == "String") {
                        current_char = pressed_char;
                    }
                });
                $(window).on("click", function (event) {
                    div = $("<div>", {id: "div_" + count, class: "click " + current_char});
                    $(div).text(current_char);
                    $("body").append(div);
                    count++;
                });
            });
        </script>
        <title>
        </title>
    </head>
    <body>
    </body>
</html>