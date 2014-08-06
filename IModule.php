<?php

interface IModule
{
    public function __construct($name, $dependences);

    public function config($name, $configuration);

    public function run();
}
