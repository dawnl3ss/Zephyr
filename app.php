<?php

/**
 * @param string $method
 *
 * @param string $name
 *
 * @param $callback
 *
 * @return void
 */
function create_route(string $method, string $name, $callback){
    array_push(Controller::$route_list, new Route($method, $name, $callback));
}