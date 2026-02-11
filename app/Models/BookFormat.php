<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BookFormat extends Model
{
    //
    protected $fillable = [
        'book_id',
        'format_type',
        'stock',
        'file_path'
    ];

    public function book(){
        return $this->belongsTo(Book::class);
    }

    public function peminjaman(){
        return $this->hasMany(Peminjaman::class);
    }
}
