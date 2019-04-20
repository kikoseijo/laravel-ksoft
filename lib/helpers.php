<?php

use Illuminate\Support\Facades\Route;

if (!function_exists('route_has')) {
    function route_has($route_name, $params = [], $absolute = true): string
    {
        if (str_contains($route_name, '@')) {
            return action($route_name, $params);
        }

        if (!Route::has($route_name)) {
            return url($route_name);
        }

        return route($route_name, $params, $absolute);
    }
}

if (!function_exists('normalizeString')) {
    function normalizeString($text, $limit = 0): string
    {
        if (!$text) {
            return '';
        }
        $res = '';
        if ($limit > 0) {
            $res = str_limit($text, $limit);
        } else {
            $res = $text;
        }
        return ucfirst(mb_strtolower($res));
    }
}
