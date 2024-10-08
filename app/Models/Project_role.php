<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project_role extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'project_id',
    ];
}
