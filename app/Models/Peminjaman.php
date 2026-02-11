<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    //
    protected $fillable = [
        'user_id',
        'book_format_id',
        'tanggal_pinjam',
        'jatuh_tempo',
        'tanggal_kembali',
        'status',
        'denda'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    // public function book(){
    //     return $this->belongsTo(Book::class);
    // }

    public function format(){
        return $this->belongsTo(BookFormat::class, 'book_format_id');
    }
}
