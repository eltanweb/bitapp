<?php

namespace Bitapp;

/**
 * Class Config
 * @package Bitapp
 */
class ConfigLoader
{

    /**
     * @var
     */
    private $config;

    /**
     *  function for load config file;
     */
    public static function execute(array $configs): ConfigLoader
    {
        $self = new self();
        $self->load($configs);
        return $self;
    }

    private function load(array $configs)
    {
        foreach ($configs as $config) {

        }
    }


}