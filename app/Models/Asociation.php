<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asociation extends Model
{
    /** @use HasFactory<\Database\Factories\AsociationFactory> */
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'email',
        'phone',
        'address',
        'city',
        'country',
    ];
}
