<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class moption extends Model
{
    use HasFactory;

    public $table="option";
    public $primaryKey ="idOp";
    public $incrementing=true;
    //protected $keyType = 'string';
    public $timestamps = false;
}
