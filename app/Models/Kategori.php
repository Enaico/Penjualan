<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    
    //ini ditambahkan jka nama tavel kita tidak jamak (dalam bahasa indoensia)
    protected $table = 'kategori';

    // ini jika kita menggunakan Eloquent ORM
    protected $guarded = [];
}
