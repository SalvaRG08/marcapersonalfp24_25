<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;
    protected $table = 'mis_estudiantes';
    protected $primaryKey = 'my_id';
    public $timestamps = false;
}
