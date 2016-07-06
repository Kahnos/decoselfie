<?php

/*
    Config file for decoSelfie.
    Author: kahnos
*/
$config = array(
    "urls" => array(
        "baseUrl" => "http://127.0.0.1/"
    )
);

defined("VIEWS_PATH")
    or define("VIEWS_PATH", realpath(dirname(__FILE__) . '/views'));

defined("JS_PATH")
    or define("JS_PATH", '/decoselfie/src/js');

defined("CSS_PATH")
    or define("CSS_PATH", '/decoselfie/src/css');

defined("VENDOR_PATH")
    or define("VENDOR_PATH", '/decoselfie/src/assets/vendor');

/*
    Error reporting.
*/
ini_set("error_reporting", "true");
error_reporting(E_ALL|E_STRCT);

?>
