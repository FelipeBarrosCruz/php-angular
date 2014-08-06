<?php

class RouterProvider implements IAngularConfig
{
    public $routes = [];

    public function when($location, $data) {
        $this->routes[$location] = $data;
        return $this;
    }

    public function otherwise(Location $location) {
        $this->routes['otherwise'] = $location;
    }

    public function register() {
        if(empty($this->routes)) {
            throw new Exception('Configuracao de rotas inválida, informe pelo menos uma rota', 1);
        }

        return $this->routes;
    }
} 
