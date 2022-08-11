<?php

class Controller {

    /** @var Route[] $route_list */
    public static $route_list = [];

    public static function __load(){
        foreach (self::$route_list as $route){
            Router::{$route->get_method()}($route->get_route(), $route->get_callback());
        }
    }

}