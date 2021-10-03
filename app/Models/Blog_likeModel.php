<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog_likeModel extends Model
{
    use HasFactory;
    protected $table='blog_likg';
    protected $primaryKey = 'id_Like';
    protected $fillable = [
        'id_Like',
        'id_blog',
        'id_cus',
        'likes',
        'dislike',
        'haslike',
        'hasdislike'
    ];
}
