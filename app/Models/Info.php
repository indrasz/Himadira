<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Info extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'infos';

    protected $fillable = [
        'name',
        'category',
        'description',
        'slug',
        'thumbnail',
    ];
}
