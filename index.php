<?php

?>
<html>
    <head>
        <script type="text/javascript" src="jquery-2.2.4.min.js"></script>
        <script type="text/javascript">
            $(function () {
                $(document).contextmenu(function() {
                    return false;
                });
                var current_char = "0";
                var font_size = "50px";
                var font = "Sans Serif";
                var font_color = "black";
                var count = 0;
                $(document).on("keypress", function (event) {
                    pressed_char = String.fromCharCode(event.charCode);
                    if (typeof pressed_char == "string") {
                        current_char = pressed_char;
                    }
                });
                $(document).on("click", function (event) {
                    div = $("<div>", {id: "div_" + count, class: "click " + current_char});
                    $(div).css("position", "absolute")
                          .css("font-size", font_size)
                          .css("font", font)
                          .css("color", font_color);
                    $(div).css("left", event.pageX - $(div).width() / 2)
                          .css("top", event.pageY - $(div).height() / 2)
                          .text(current_char);
                    $("body").append(div);
                    count++;
                });
            });
        </script>
        <title>
            Click Type
        </title>
    </head>
    <body>
    </body>
</html>