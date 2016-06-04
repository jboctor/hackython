<?php

?>
<html>
    <head>
        <script type="text/javascript" src="jquery-2.2.4.min.js"></script>
        <script type="text/javascript">
            $(function () {
                var current_char = "0";
                $(window).on("keypress", function (event) {
                    div = $("<div>", {id: "div_" + count, class: "click " + current_char});
                    div.innerText(current_char);
                    $(window).append(div);
                    console.log(event);
                });
                $(window).on("click", function (event) {
                    console.log(event);
                });
            });
        </script>
        <title>
        </title>
    </head>
    <body>
    </body>
</html>