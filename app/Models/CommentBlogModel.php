<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentBlogModel extends Model
{
    use HasFactory;
    protected $table = 'comment_blog';
    protected $primaryKey = 'id_com';
    protected $fillable = [
        'id_com',
        'id_blog',
        'id_cus',
        'dates',
        'content'
    ];
}
