<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class postModel extends Model
{
    use HasFactory;
    protected $table='blog';
    protected $primaryKey = 'id_blog';
    protected $fillable = [
        'id_blog',
        'id_cus',
        'title',
        'img_bg',
        'dates',
        'content'
    ];
}
