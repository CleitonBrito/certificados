<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alunos extends Model
{
    protected $fillable = [
        'id',
        'nome'
    ];

    public $timestamps = false;
}
