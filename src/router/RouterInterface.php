<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/app/Autoloader.php";
__load_all_classes();

interface RouterInterface {

    /**
     * @param string $route
     *
     * @param string|array|callback $callback
     *
     * @return Route
     */
    public static function get(string $route, $callback);

    /**
     * @param string $route
     *
     * @param string|array|callback $callback
     *
     * @return Route
     */
    public static function post(string $route, $callback);

    /**
     * @param string $route
     *
     * @param string|array|callback $callback
     *
     * @return Route
     */
    public static function put(string $route, $callback);

    /**
     * @param string $route
     *
     * @param string|array|callback $callback
     *
     * @return Route
     */
    public static function patch(string $route, $callback);

    /**
     * @param string $route
     *
     * @param string|array|callback $callback
     *
     * @return Route
     */
    public static function delete(string $route, $callback);

    /**
     * @param string $route
     *
     * @param string|array|callback $callback
     *
     * @return Route
     */
    public static function options(string $route, $callback);

    /**
     * @param string $route
     *
     * @param string|array|callback $callback
     *
     * @return Route
     */
    public static function head(string $route, $callback);
}
