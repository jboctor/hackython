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
                          .css("left", event.pageX)
                          .css("top", event.pageY)
                          .text(current_char);
                    $("body").append(div);
                    count++;
                });
            });
        </script>
        <style>
            .click {
                font-size: 5em;
            }
        </style>
        <title>
            Click Type
        </title>
    </head>
    <body>
    </body>
</html>