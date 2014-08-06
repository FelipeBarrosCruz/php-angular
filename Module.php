<?php

class Module implements IModule
{
    private $name;
    private $dependences = [];
    private $configuration;

    public function __construct($name, $dependences) {
        $this->name = $name;
        $this->dependences = $dependences;
    }

    public function config($name, $configuration) {

        if(in_array($name, $this->dependences)) {
            $this->configuration[$name] = $configuration(new $name());
        } else {
            throw new Exception('Nao existe a dependencia', 1);
            
        }
    }

    public function run() {
        foreach($this->dependences as $dependency) {
            if(array_key_exists($dependency, $this->configuration)) {
                return $this->configuration[$dependency]->register();
            }
        }
    }
}