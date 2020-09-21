<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'body'];
    //force à recupérer les posts avec les commentaires qui leur sont associés
    protected $withCount = ['comments'];

    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }
}
