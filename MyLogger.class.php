<?php

class MyLogger 
{
    function log($message, $type) 
    {
        echo "$type: $message \n";
    }

    function warning($message)
    {
        echo "WARNING: $message \n";
    }

    function error($message)
    {
        echo "ERROR: $message \n";
    }

    function info($message)
    {
        echo "INFO: $message \n";
    }

    function debug($message)
    {
        echo "DEBUG: $message \n";
    }
}

$logger = new MyLogger();
$logger->error('dit is een error');
$logger->log('Hello world!', 'INFO');

?>