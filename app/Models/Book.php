<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use MongoDB\Laravel\Eloquent\Model as Eloquent;

class Book extends Eloquent
{
    use HasFactory;

    protected $collection = 'books';

    protected $fillable = [
        'title',
        'author',
        'isbn',
    ];
}
