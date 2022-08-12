<?php

require_once "src/controller/Controller.php";
require_once "src/standard/StandardMethods.php";

const METHOD_GET = StandardMethods::METHOD_GET;
const METHOD_POST = StandardMethods::METHOD_POST;
const METHOD_PUT = StandardMethods::METHOD_PUT;
const METHOD_PATCH = StandardMethods::METHOD_PATCH;
const METHOD_DELETE = StandardMethods::METHOD_DELETE;

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

function create_routes(array $routes){
    foreach ($routes as $route){
        create_route($route["method"], $route["name"], $route["callback"]);
    }
}

function load_routes(){
    Controller::__load();
}