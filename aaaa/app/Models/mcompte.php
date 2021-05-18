<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mcompte extends Model
{
    use HasFactory;
    public $table="user";
    public $primaryKey ="idUser";
    public $incrementing=true;
    //protected $keyType = 'string';
    public $timestamps = false;
}
    

