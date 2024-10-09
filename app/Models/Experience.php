<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'role',
        'periode',
        'foto',
        'deskripsi',
    ];

    public function jobdesk()
    {
        return $this->hasMany(Jobdesk::class);
    }
    public function dokumentasi()
    {
        return $this->hasMany(Dokumentasi::class);
    }
}
