<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'buku';
    protected $fillable = [
        'buku',
        'penulis',
        'penerbit'
    ];
    public $timestamps =false;
    protected $hidden;
}
