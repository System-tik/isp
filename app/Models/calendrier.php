<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class calendrier extends Model
{
    protected $fillable=['activite','descrip','debut','fin'];
    use HasFactory;
}
