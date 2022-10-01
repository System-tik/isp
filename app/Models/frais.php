<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class frais extends Model
{
    protected $fillable=['type','montant'];
    use HasFactory;
    protected $fillable = ['type','montant'];
}

