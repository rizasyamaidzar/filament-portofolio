<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project_dokumentasi extends Model
{
    use HasFactory;
    protected $fillable = [
        'foto',
        'project_id',
    ];
}