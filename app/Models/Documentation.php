<?php

namespace App\Models;

use App\Models\Department;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Documentation extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'documentations';

    protected $fillable = [
        'departments_id',
        'name',
        'description',
        'url',
        'thumbnail',
    ];

    public function department(){
        return $this->belongsTo(Department::class, 'departments_id', 'id');
    }
}
