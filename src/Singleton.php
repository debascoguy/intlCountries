<?php
namespace Countries;

trait Singleton 
{
    private static $instance = null;

    /**
     * @return self
     */
    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}