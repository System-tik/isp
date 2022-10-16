<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class frais extends Model
{
    protected $fillable=['type','montant', 'niveau_id', 'system_id'];
    use HasFactory;
}

