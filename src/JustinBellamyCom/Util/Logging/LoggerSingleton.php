<?php

namespace JustinBellamyCom\Util\Logging;

class LoggerSingleton {
    private static $instance;
    private $log;

    public static function getInstance()
    {
        if(null === static::$instance) {
            static::$instance = new static(); //late static binding (since PHP 5.3.0)
        }
        return static::$instance;
    }

    // prevent creating a new instance
    private function __construct(){
    	$this->log = array();
    }

    //prevent cloning/duplicates
    private function __clone(){}
    private function __wakeup(){}

    //write to log
    public function log($msg)
    {
    	if(!empty($msg)){
    		$this->log[] = $msg;
    	}
    }

    //retrieve log
    public function getLog()
    {
   		return $this->log;
    }
}