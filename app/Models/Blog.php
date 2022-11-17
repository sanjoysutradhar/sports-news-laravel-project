<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static where(string $string, $id)
 */
class Blog extends Model
{
    use HasFactory;
    protected $fillable=[
        'category_id',
        'author',
        'title',
        'image',
        'description',
        'status',
    ];
}
