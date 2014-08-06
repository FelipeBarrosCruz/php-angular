<?php

class RootScope implements IRootScope
{
    private $instances = [];
    private $module;

    public function __construct(IModule $module) {
        $this->module = $module;
        $this->module->run();
    }

    public function register($name, IAngularElement $element) {
        $this->instances[$name] = $element;
    }

    public function __call($method, $args) {

        if(array_key_exists($method, $this->instances)) {
            return call_user_func_array([$this->instances[$method], 'invoke'], $args);
        }
    }
}
