<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'link_repository', 'topic', 'slug'];

    public static function generateSlug($name) {
        
        return Str::slug($name, '-');
    }
}
