<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori_Informasi extends Model
{
    use HasFactory;

    protected $table = 'kategori_informasis';
    protected $fillable = [
        'name',
        'slug',
    ];

    public function informasi(){
        return $this->hasMany(Informasi::class, 'kategori_informasi_id');
    }
}
