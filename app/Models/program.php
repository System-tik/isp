<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class program extends Model
{
    use HasFactory;
    protected $fillable = ['idoption','nomCours','descrip', 'semestre_id', 'credit'];
}
