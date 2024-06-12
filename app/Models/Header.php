<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
    use HasFactory;

    protected $fillable = [
        'title1',
        'short_title1',
        'title2',
        'short_title2',
        'thumbnail',
        'thumbnail2',
    ];
}
