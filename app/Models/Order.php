<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'order';
    protected $primaryKey = 'Id_Order';
    protected $fillable = [
        'Id_User',
        'Id_Service',
        'Date',
    ];

}
