<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Carbon;

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

if (!function_exists('ajax_errors')) {
    function ajax_errors($message, $title = 'Error')
    {
        return ajax_errors_reload($message, $title = 'Error', false);
    }
}

if (!function_exists('ajax_errors_reload')) {
    function ajax_errors_reload($message, $title = 'Error', $reload = true)
    {
        return [
            'reaload' => $reload,
            'success' => false,
            'title' => $title,
            'message' => $message,
        ];
    }
}

if (!function_exists('ajax_errors')) {
    function ajax_errors($message, $title = 'Error')
    {
        return Carbon::createFromFormat('Y-m-d H:i', array_get($data, 'started_at'));
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

if (!function_exists('secondsDif')) {
    function secondsDif(Carbon $date): string
    {
        return now()->diffInSeconds($date);
    }
}
