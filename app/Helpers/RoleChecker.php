<?php

use Illuminate\Support\Facades\Auth;

if (!function_exists('checkRole')) {

    function checkRole($param)
    {
        return Auth::user()->role === $param;
    }
}
