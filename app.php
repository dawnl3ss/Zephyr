<?php

/**
 * @param string $type
 *
 * @param string $name
 *
 * @param $callback
 *
 * @return void
 */
function create_route(string $type, string $name, $callback){
    array_push(Controller::$route_list, new Route($type, $name, $callback));
}