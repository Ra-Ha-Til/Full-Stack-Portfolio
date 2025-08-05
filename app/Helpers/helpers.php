<?php

if (!function_exists('active_menu')) {
    function active_menu($route)
    {
        return request()->routeIs($route) ? 'active' : '';
    }
}