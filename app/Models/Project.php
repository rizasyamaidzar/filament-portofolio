<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'keterangan',
        'foto',
        'link_yt',
        'project_id',
    ];

    public function featurs()
    {
        return $this->hasMany(Fitur::class);
    }
    public function dokumentasi()
    {
        return $this->hasMany(Project_dokumentasi::class);
    }
    public function roles()
    {
        return $this->hasMany(Project_role::class);
    }
    public function tools()
    {
        return $this->hasMany(Tool::class);
    }
}
