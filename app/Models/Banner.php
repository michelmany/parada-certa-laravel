<?php

namespace ParadaCerta\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $fillable = [
        'link',
        'title',
        'order'
    ];
}
