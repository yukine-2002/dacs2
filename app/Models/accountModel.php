<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class accountModel extends Model
{
    use HasFactory;
    protected $table = 'account';
    protected $primaryKey = 'id_ac';
    protected $fillable = [
        'id_ac',
        'name',
        'username',
        'password',
        'provider',
        'provider_id',
        'quyen'
    ];

}
