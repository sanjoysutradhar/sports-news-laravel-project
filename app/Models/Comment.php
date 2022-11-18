<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id',
        'blog_id',
        'commenter_name',
        'commenter_email',
        'commenter_image',
        'comment',
    ];

}
