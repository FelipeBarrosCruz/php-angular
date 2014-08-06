<?php

class AngularElement implements IAngularElement
{
    private $closure;

    public function __construct($closure) {
        $this->closure = $closure;
    }

    public function invoke($args) {
        return call_user_func_array($this->closure, $args);
    }
}
