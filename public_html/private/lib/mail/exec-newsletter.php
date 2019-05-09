<?php

require_once dirname(__FILE__) . '/mail.php';

sendNewsLetter(json_decode($argv[1]), $argv[2], $argv[3], $argv[4]);
