<?php

class MyLogger 
{
    function log($message, $type) 
    {
        echo "$type: $message \n";
    }

    private function logWithTime($message)
    {
        echo date("[Y-m-t G:i] ")  . $message . "\n";
    }

    function warning($message)
    {
        $this->logWithTime("WARNING: $message");
    }

    function error($message)
    {
        $this->logWithTime("ERROR: $message");
    }

    function info($message)
    {
        $this->logWithTime("INFO: $message");
    }

    function debug($message)
    {
        $this->logWithTime("DEBUG: $message");
    }
}

$logger = new MyLogger();
$logger->error('dit is een error');

?>