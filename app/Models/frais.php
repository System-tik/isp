<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class frais extends Model
{
    protected $fillable=['montant', 'niveau_id','option_id'];
    use HasFactory;
}

