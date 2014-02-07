<?php

namespace Blackmesa\SilexChromePhp;

use ChromePhp as ChromePhpBase;

/**
 * ChromePhp
 *
 * @author Blackmesa <info@blackmesa.es>
 */
class ChromePhp
{
    protected $debug;
    protected $logger;
    /**
     * Constructor
     */
    public function __construct($debug,$logger=null)
    {
        $this->debug = $debug;
        $this->logger = $logger;
        ChromePhpBase::getInstance()->addSetting(ChromePhpBase::BACKTRACE_LEVEL,3);
    }
    
    /**
     * store a debug trace
     *
     * @param string $message
     */
    protected function debugLog($message)
    {
        if (null !== $this->logger) {
            $this->logger->addDebug($message);
        }
    }

//************ CHROME PHP WRAPPER   
    public function error()
    {
        $args = func_get_args();
        $this->_log(ChromePhpBase::ERROR,$args);
    }
       
    public function warn()
    {
        $args = func_get_args();
        $this->_log(ChromePhpBase::WARN,$args);
    }
    
    public function info()
    {
        $args = func_get_args();
        $this->_log(ChromePhpBase::INFO,$args);
    }
    
    public function log()
    {
        $args = func_get_args();
        $this->_log(ChromePhpBase::LOG,$args);
    }
    
    public function table()
    {
        $args = func_get_args();
        $this->_log(ChromePhpBase::TABLE,$args);
    }
    
    public function group()
    {
        $args = func_get_args();
        $this->_log(ChromePhpBase::GROUP,$args);
    }
    
    public function groupEnd()
    {
        $args = func_get_args();
        $this->_log(ChromePhpBase::GROUP_END,$args);
    }
    
    public function groupCollapsed()
    {
        $args = func_get_args();
        $this->_log(ChromePhpBase::GROUP_COLLAPSED,$args);
    }
    
    
    protected function _log($level, array $args)
    {
        if($this->debug)
        {
            switch($level)
            {
                case ChromePhpBase::WARN:
                    ChromePhpBase::warn($args);               
                    break; 
                case ChromePhpBase::ERROR:
                    ChromePhpBase::error($args);
                    break; 
                case ChromePhpBase::GROUP:
                    ChromePhpBase::group($args);
                    break; 
                case ChromePhpBase::INFO:
                    ChromePhpBase::info($args);
                    break; 
                case ChromePhpBase::GROUP_END:
                    ChromePhpBase::groupEnd($args);
                    break; 
                case ChromePhpBase::GROUP_COLLAPSED:
                    ChromePhpBase::groupCollapsed($args);
                    break; 
                case ChromePhpBase::TABLE:
                    ChromePhpBase::table($args);
                    break; 
               default:
                    ChromePhpBase::log($args);
            }

        }
    }
}
