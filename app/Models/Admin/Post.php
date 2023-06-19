<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable =[
        'title',
        'description',
        'image',
        'category_id',
        'reaction_count',
        'comment_count',
        'view_count'
    ];
}
