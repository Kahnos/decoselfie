<?php

/*
    Template extracted from: http://code.tutsplus.com/tutorials/organize-your-next-php-project-the-right-way--net-5873
    Original author: Derek Reynolds
    Modified by: kahnos
*/

$config = array(
    "urls" => array(
        "baseUrl" => "http://127.0.0.1/"
    ),
    "paths" => array(
        "resources" => "/path/to/resources",
        "images" => array(
            "content" => $_SERVER["DOCUMENT_ROOT"] . "/images/content",
            "layout" => $_SERVER["DOCUMENT_ROOT"] . "/images/layout"
        )
    )
);

defined("VENDOR_PATH")
    or define("VENDOR_PATH", realpath(dirname(__FILE__) . '/vendor'));

defined("VIEWS_PATH")
    or define("VIEWS_PATH", realpath(dirname(__FILE__) . '/views'));

/*
    Error reporting.
*/
ini_set("error_reporting", "true");
error_reporting(E_ALL|E_STRCT);

?>
