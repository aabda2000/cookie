<?php

$exptime = time() + (60 * 60 * 24 * 1 / 2);
$timeMemo = (string)$exptime;
$cookie_uame = "myuser";
$cookie_uvalue = "Cosette";
setcookie($cookie_uame, "$cookie_uvalue|$timeMemo", $exptime);

?>
<html>

<head>
    <title>
        Get cookie expiration date from JS
    </title>

    <head>
        <link rel="stylesheet" href="style.css" />
    </head>
    <script type="text/javascript">
        function cookieExpirationDate() {

            var infodiv = document.getElementById("info");
            // old AJAX style: JQuery is nicer
            var xmlhttp;
            if (window.XMLHttpRequest) {
                xmlhttp = new XMLHttpRequest;
            } else {
                xmlhttp = new ActiveXObject(Microsoft.XMLHTTP);
            }

            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    infodiv.innerHTML = xmlhttp.responseText;
                }
            }

            xmlhttp.open("GET", "cookie.php", true);
            xmlhttp.send();

        }
    </script>
</head>

<body>
    <button class="btn-submit" onclick="javascript:cookieExpirationDate();">
        Get Cookie expire date
    </button>
    <hr />
    <div id="info"></div>
</body>

</html>