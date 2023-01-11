<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'percentage',
        'duration',
        'min_invest',
        'max_invest',
        'min_power',
        'max_power',
    ];
}
