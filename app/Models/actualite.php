<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class actualite extends Model
{
    protected $fillable = ['titre', 'auteur', 'descrip', 'images'];
    use HasFactory;
}
