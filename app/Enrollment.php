<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    protected $fillable = [
        'id',
        'event_name',
        'name',
        'email',
        'phone',
        'job_title',
        'education',
        'address'
    ];
}
