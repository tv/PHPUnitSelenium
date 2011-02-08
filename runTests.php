<?php
var_dump($_SERVER);
ini_set(
    'include_path',
    ini_get('include_path').':'.
    join(
        array(
            realpath($_SERVER['PWD']. '/library'),
            realpath($_SERVER['PWD']. '/library/php-file-iterator'),
            realpath($_SERVER['PWD']. '/library/php-code-coverage'),
            realpath($_SERVER['PWD']. '/library/php-text-template'),
            realpath($_SERVER['PWD']. '/library/php-timer'),
            realpath($_SERVER['PWD']. '/library/php-token-stream'),
            realpath($_SERVER['PWD']. '/library/phpunit'),
            realpath($_SERVER['PWD']. '/library/phpunit-mock-objects'),
            realpath($_SERVER['PWD']. '/library/phpunit-selenium/'),
        ), 
        ':'
    )
);
require_once('library/PHPunit/phpunit.php');