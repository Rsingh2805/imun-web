<?php
$dir = dirname(__FILE__);
$server = $_SERVER["DOCUMENT_ROOT"];

define('CONFIG', array(
        "db" => array(
            "database" => "imun_test",
            "username" => "imun_test",
            "password" => "imun_test",
            "host" => "localhost"
        ),
        "urls" => array(
            "baseURL" => "localhost"
        ),
        "paths" => array(
            "css" => $server.'/public_html/css/',
            "img" => $server.'/public_html/img/',
            "js" => $server.'/public_html/js/'
        ),
        "smtp" => array(
            "email" => "no-reply@internationalmun.org",
            "pass" => "imun2019@A",
            "name" => "Rahul singh",
            "host" => "internationalmun.org",
            "debug" => 2,
            "port" => 465,
            "from" => "no-reply@internationalmun.org",
            "from_name" => "IMUN Team"
        )
    )
);
