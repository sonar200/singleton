<?php

namespace Sonar200\Singleton;


/**
 * Singleton class
 */
class Singleton
{

    /**
     * Object instances
     *
     * @var array
     */
    protected static array $instances = [];

    /**
     * Constructor
     *
     * @since 1.0.0
     */
    protected function __construct()
    {
        return '';
    }

    /**
     * Clone method
     *
     * @return void
     *
     * @since  1.0.0
     */
    protected function __clone()
    {
    }

    /**
     * Wakeup method
     *
     * @since 1.0.0
     */
    public function __wakeup()
    {
    }

    /**
     * Gets the instance
     *
     * @return Singleton
     *
     * @since  1.0.0
     */
    public static function get(): Singleton
    {
        $class = get_called_class();

        if (!isset(self::$instances[$class])) {
            self::$instances[$class] = new static();
        }

        return self::$instances[$class];
    }
}