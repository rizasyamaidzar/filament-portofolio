<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'logo',
        'jurusan',
        'profile_id',
    ];

    public function keterangans()
    {
        return $this->hasMany(Keterangan::class);
    }
}
