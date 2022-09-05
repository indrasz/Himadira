<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Store extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'stores';

    protected $fillable = [
        'name',
        'price',
        'description',
        'url',
        'slug',
        'thumbnail',
    ];
}
