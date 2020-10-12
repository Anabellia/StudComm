<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    //sad cu dodam ovde ovo da mogu json u i iz db
    protected $casts = [
        'categories' => 'array'
    ];
}
