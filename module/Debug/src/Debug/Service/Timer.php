<?php
/**
 * Created by PhpStorm.
 * User: Mid
 * Date: 08/02/2016
 * Time: 00:33
 */

namespace Debug\Service;


class Timer
{
    /**
     * Start times
     * @var array
     */
    protected $start;


    /**
     * Defines if the time must be presented as float
     * @var boolean
     */
    protected $timeAsFloat;


    /**
     * Timer constructor.
     * @param bool $timeAsFloat
     */
    public function __construct($timeAsFloat = false)
    {
        $this->timeAsFloat = $timeAsFloat;
    }


    /**
     * @param $key
     */
    public function start($key)
    {
        $this->start[$key] = microtime($this->timeAsFloat);
    }

    /**
     * @param $key
     * @return mixed|null
     */
    public function stop($key)
    {
        if(!isset($this->start[$key])){
            return null;
        }

        return microtime($this->timeAsFloat) - $this->start[$key];
    }
}