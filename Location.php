<?php

class Location
{
    private $location;

    public function __construct($location) {
        $this->location = $location;
    }

    public function redirectTo() {
        echo 'Direcionando para' . $this->location;
    }
}