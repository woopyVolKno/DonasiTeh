<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    use HasFactory;

    public $fillable = [
        'thumbnail',
        'tittle',
        'story',
        'target',
        'end_date'
    ];
}
