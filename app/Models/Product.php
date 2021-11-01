<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function demoUrl()
    {
        return 'storage/'.$this->demo_url;
    }

    public function thumbnailUrl()
    {
        return 'storage/'.$this->thumbnail_url;
    }

    public function sourceUrl()
    {
        return storage_path('app/private/'.$this->source_url);
    }


}
