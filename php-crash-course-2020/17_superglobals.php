<?php

// $GLOBALS is an array of the declared variables in the global name space
    $x = 10;

    /*
    function something() {
        $y = 20;
        $GLOBALS['x'];
        echo $GLOBALS['x'] + $y . '<br>';
    }
*/ //not best practice instead use the one below

    function something($x) {
        $y = 20;
        echo $y + $x . '<br>';
    }
    something($x);
    echo $x . '<br>';
    echo $y . '<br>';

// $_GET and $_POST superglobals are used to pas information through the url. This information can then be accessed by another page via the URL

?>


    <form method="GET" action="">    <!--unlike POST, GET is not private-->
        <input type="hidden" name="jina" value="Vallloooo">
        <button type="submit"> PRESS ME! </button>
    </form>

    <?php
        echo $_GET["jina"];
    ?>


<!--  $_COOKIE & $_SESSION superglobals allow you to save info on the user in the client side (browser) and the  server side respectively-->
    <?php
        // cookie example: a website remembering what products you like. Cookies have non-sensitive information
        // making a cookie
        setcookie("cookieName", "cookieValue", time() + 86400);
        // destroying cookies
        setcookie("cookieName", "cookieValue", time() - 86400);

        // session is logged off immediately the browser is shut down. It helps the browser remember the user who is logged in when they move from one webpage to another
        // creating a session
        $_SESSION["sessionName"] = "idOfUser";      #unlike in cookies, the idOfUser is not visible for hackers since it is saved inside a session variable

    ?>