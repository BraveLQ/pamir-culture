<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'title', 'image', 'description', 'post_url', 'author', 'source'];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
