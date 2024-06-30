<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'payment';
    protected $primaryKey = 'Id_Payment';
    protected $fillable = [
        'Id_User',
        'Id_Order',
        'Method',
        'Proof',
        'Date',
        'Total',
    ];

    public function orderss() {
        return $this->belongsTo(Order::class, 'Id_Order', 'Id_Order');
    }

    public function userss() {
        return $this->HasMany(User::class, 'Id_User', 'Id_User');
    }
}


