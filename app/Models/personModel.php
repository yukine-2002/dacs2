<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class personModel extends Model
{
    use HasFactory;
    protected $table = 'person';

    protected $primaryKey = 'id_per';
    protected $fillable = [
        'id_per',
        'fullname',
        'email',
        'dates',
        'cmnd',
        'adress',
        'sdt'
    ];
}
