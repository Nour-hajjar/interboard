<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['user_id', 'thumbnail', 'en_title','ar_title', 'slug', 'en_sub_title','ar_title', 'en_details','ar_details', 'post_type', 'is_published'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_posts');
    }
}
