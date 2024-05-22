<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $table = 'payment';
    protected $primaryKey = 'Id_Payment';

    protected $fillable = [
        'Id_User',
        'Id_Order',
        'Methode',
        'Proof',
        'Date',
        'Total',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'Id_User');
    }

    public function order()
    {
        return $this->belongsTo(Order::class, 'Id_Order');
    }

    public function invoices()
    {
        return $this->hasMany(Invoice::class, 'Id_Payment');
    }
}
