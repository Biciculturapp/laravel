<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BikerReport extends Model
{
    protected $fillable = ['id', 'Type', 'Date', 'Position', 'message'];
}
