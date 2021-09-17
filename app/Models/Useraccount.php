<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Useraccount extends Model
{
    use HasFactory;
    protected $table = 'useraccount';
    protected $fillable=['firstname', 'lastname', 'email','phone','city','gender','age','image','status'];
}
