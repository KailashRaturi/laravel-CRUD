<?php
// app/Models/Task.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    // Specify which attributes are mass assignable
    protected $fillable = [
        'title',
        'description',
        'completed',
    ];

    // Alternatively, you can use $guarded to specify which attributes are not mass assignable
    // protected $guarded = [];
}
