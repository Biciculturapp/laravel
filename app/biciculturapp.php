<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class biciculturapp extends Model
{
    protected $fillable = ['id', 'BikerUser', 'BikerReport', 'ReportType', 'SubType'];
}
