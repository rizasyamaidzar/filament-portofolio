<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'keterangan',
        'deskripsi',
        'summary',
    ];
    public function educations()
    {
        return $this->hasMany(Education::class);
    }
    public function sosmed()
    {
        return $this->hasMany(Sosmed::class);
    }
}
