<?php

if ( ! function_exists('config_path'))
{
    /**
     * Get the configuration path.
     *
     * @param  string $path
     * @return string
     */
    function config_path($path = '')
    {
        return app()->basePath() . '/config' . ($path ? '/' . $path : $path);
    }
}

if ( ! function_exists('is_callback_function'))
{
    /**
     * Check if a callback function.
     *
     * @param  string $callback
     * @return string
     */
    function is_callback_function($callback)
    {
        return is_callable($callback) && is_object($callback) && $callback instanceof Closure;
    }
}




