<?php

namespace Bitapp;

/**
 * Class Config
 * @package Bitapp
 */
class Config
{
    /**
     *  function for load config file;
     */
    public static function load()
    {
        $obj = new self();
        return $obj;
    }
}