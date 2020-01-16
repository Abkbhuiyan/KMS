<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AcademicSession extends Model
{
    protected $fillable = [
        'session_name', 'start_date', 'end_date',
    ];
}
