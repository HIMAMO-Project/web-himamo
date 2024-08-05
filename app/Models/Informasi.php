<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informasi extends Model
{
    use HasFactory;
    protected $table = 'informasis';
    protected $fillable = [
        'user_id',
        'title',
        'slug',
        'excerpt',
        'kategori_informasi_id',
        'image',
        'desc',
    ];
    public function kategori_informasi(){
        return $this->belongsTo(Kategori_Informasi::class, 'kategori_informasi_id');
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    
}
