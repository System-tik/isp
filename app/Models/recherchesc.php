<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class recherchesc extends Model
{
    protected $fillable = ['titre', 'type', 'descrip'];
    use HasFactory;
}
