<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'book';
    protected $primaryKey = 'id_book';
    protected $fillable = [
        'title',
        'description',
        'cover',
        'file'
    ];
}
