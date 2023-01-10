<?php

use App\Models\Power;
use App\Models\Setting;

function power($user_id)
{
    $in = Power::where('user_id', $user_id)->where('sum', true)->sum('amount');
    $out = Power::where('user_id', $user_id)->where('sum', false)->sum('amount');
    return $in - $out;
}



function setting($key)
{
    $setting = Setting::where('key', $key)->first();
    return $setting->value;
}
