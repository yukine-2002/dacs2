<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class imageProductModel extends Model
{
    use HasFactory;
    protected $table='image_pro';
    protected $primaryKey = 'id_img';
    protected $fillable = [
        'id_img',
        'img1',
        'img2',
        'img3'
    ];
}
