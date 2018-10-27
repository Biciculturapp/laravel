<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubType extends Model
{
    protected $fillable = [
        'id', 'BikerUser', 'BikerReport', 'SubType'
    ];
}
