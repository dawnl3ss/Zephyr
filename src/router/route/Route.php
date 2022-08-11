<?php

class Route {

    /** @var string $route */
    private string $route;

    public function __construct(string $route){
        $this->route = $route;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function name(string $name) : self {
        self::$routes[$name] = $this->route;
        return $this;
    }

    public function previous() : void {
        $previous = $_SERVER['HTTP_REFERER'] ?? '/';
        header("Location: $previous", true, 302);
        return;
    }
}
