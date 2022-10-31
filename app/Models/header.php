<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class header extends Model
{
    protected $fillable = ['titre', 'sous', 'descrip'];
    use HasFactory;
}
