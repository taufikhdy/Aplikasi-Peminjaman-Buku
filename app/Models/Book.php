<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
    protected $fillable = [
        'title',
        'author',
        'publisher',
        'tahun',
        'stock'
    ];

    public function categories(){
        return $this->hasMany(Category::class);
    }

    public function peminjaman(){
        return $this->hasMany(Peminjaman::class);
    }
}
