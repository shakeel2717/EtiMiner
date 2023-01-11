<?php

use App\Models\Investment;
use App\Models\Power;
use App\Models\Setting;

function power($user_id)
{
    $in = Power::where('user_id', $user_id)->where('sum', true)->sum('amount');
    $out = Power::where('user_id', $user_id)->where('sum', false)->sum('amount');
    return $in - $out;
}

function powerInUsed($user_id)
{
    $in = Investment::where('user_id', $user_id)->where('status', true)->sum('amount');
    return $in;
}


function powerInUsedByCoin($user_id, $coin_id)
{
    $in = Investment::where('user_id', $user_id)->where('coin_id', $coin_id)->where('status', true)->sum('amount');
    return $in;
}



function setting($key)
{
    $setting = Setting::where('key', $key)->first();
    return $setting->value;
}


function getPercentage($user_id, $coin_id)
{
    info($coin_id);
    $usedByThisCoin = powerInUsedByCoin($user_id, $coin_id);
    $totalPower = $usedByThisCoin + power($user_id);
    return $totalPower * $usedByThisCoin / 100;
    
}
