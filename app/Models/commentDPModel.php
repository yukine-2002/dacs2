<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class commentDPModel extends Model
{
    use HasFactory;

    protected $table = 'comment_product';


    protected $fillable = [
        'id_com',
        'id_pro',
        'id_cus',
        'date',
        'content',
        'likes',
        'dislike',
        'haslike',
        'hasdislike',
    ];
}
