<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    use HasFactory;

    protected $primaryKey = 'iso';

    public $incrementing = false;
    
    protected $fillable = [
        //The iso is basically the code that represent a particular currency
        'iso'
    ];
}
