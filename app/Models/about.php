<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class about extends Model
{
   protected $fillable=['titre', 'descrip'];
   use HasFactory;
}
