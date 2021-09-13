<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    //task = singular
    //tasks = plural
    // protected $guarded = []; //melindungi dari spam
    protected $fillable = ['list'];
}
