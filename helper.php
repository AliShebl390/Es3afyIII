<?php

use Illuminate\Support\Facades\Auth;

function admin()
{
    return Auth::guard('admin')->user();
}

function paramedic()
{
    return Auth::guard('paramedic')->user();
}