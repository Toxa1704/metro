<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blue_1 extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'transfer', 'number_of_in_out', 'comment'];
}
