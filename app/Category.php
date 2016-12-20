<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // Relacion de categorias con libros -- Una categoria puede tener muchos libros
    public function books()
    {
        return $this->hasMany(Book::class);
    }

    public function getNumBooksAttribute()
    {
        return $this->books->count();
    }

    public function getPublicBooksCountAttribute()
    {
        return count($this->books->where('status','Publico'));
    }

    public function getBorradorBooksCountAttribute()
    {
        return $this->books->where('status','Borrador')->count();
    }

    public function getPublicBooksAttribute()
    {
        return $this->books->where('status','Publico');
    }
}
