<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Support\Str;

class Blog extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title', 'body', 'slug', 'category', 'cover_image'
    ];

    protected $appends = ['url', 'created_date'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    public function getUrlAttribute()
    {
        return route("blogs.show", $this->slug);
    }

    public function getCreatedDateAttribute()
    {
        return $this->created_at->diffForHumans();
    }


    public function getBySlug($slug)
    {
        return Blog::where('slug', $slug)->first();
    }

    public function getRelatedBlog($id, $category)
    {
        return Blog::where('category', $category)->where('id', '!=', $id)->latest()->limit(3)->get();
    }

    public function getByUserId($userId)
    {
        return Blog::where('user_id', $userId)->get();
    }

}
