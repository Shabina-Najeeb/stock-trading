<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Riskcontrol extends Model
{
    use HasFactory;
    protected $table="riskcontrols";
    protected $fillable=[
       'guaranteed_time', 
        'steady_time',
        'win_ratio',
        
    ];
}
