<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stockbroker extends Model
{
    use HasFactory;

    protected $table = 'stockbrokers';

    protected $fillable = [
        'name',
        'full_name',
        'cnpj',
    ];
}
