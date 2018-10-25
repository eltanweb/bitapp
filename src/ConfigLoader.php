<?php

namespace Bitapp;
use Bitapp\CoreApi\Http\Exception;

/**
 * Class Config
 * @package Bitapp
 */
class ConfigLoader
{

    /**
     * @var
     */
    private $config = [];

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
            try {
                if (is_file($config)){
                    $item = include_once ($config);
                    foreach ($item as $key => $value) {
                        $this->config[$key] = $value;
                    }
                } else {
                    throw new \Exception('config is not a file');
                }
            } catch (\Exception $e) {
                throw new \Exception($e->getMessage());
            }
        }
    }


}