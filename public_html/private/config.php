<?php
$dir = dirname(__FILE__);
$server = $_SERVER["DOCUMENT_ROOT"];

define('CONFIG', array(
        "db" => array(
            "database" => "imun",
            "username" => "root",
            "password" => "000000",
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
            "email" => "rs280599@gmail.com",
            "pass" => "9671546121",
            "name" => "Rahul singh",
            "host" => "smtp.gmail.com",
            "debug" => 2,
            "port" => 587,
            "from" => "imun2221@gmail.com",
            "from_name" => "IMUN Team"
        )
    )
);
