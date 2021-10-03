<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderModel extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $primaryKey = 'id_ord';
    protected $fillable = [
        'id_ord',
        'id_user',
        'id_pro',
        'listId_pr',
        'quantity',
        'maGD',
        'tien',
        'payBy',
        'statuss',
        'dates'
    ];
}
