<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'title',
        'author',
        'status',
        'score',
        'summary',
    ];
}
