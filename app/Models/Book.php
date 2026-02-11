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
        'tahun_terbit',
        'cover'
    ];

    public function formats(){
        return $this->hasMany(BookFormat::class);
    }

    public function categories(){
        return $this->belongsToMany(Category::class);
    }

    // public function peminjaman(){
    //     return $this->hasMany(Peminjaman::class);
    // }
}
