<?php

class Scope extends RootScope
{
    public function __construct(IRootScope $rootScope) {
        $this->rootScope = $rootScope;
    }

    public function controller($name, $closure) {
        $this->rootScope->register($name, new AngularElement($closure));
    }

    public function __call($method, $args) {
        if(!method_exists($this, $method)) {
            return $this->rootScope->$method($args);
        }
    }
}
