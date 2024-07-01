<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'invoice';
    protected $primaryKey = 'Id_Invoice';
    protected $fillable = [
        'Id_User',
        'Id_Payment',
        'Id_Order',
        'Id_Service',
        'Date',
        'Total',
        'Proof',
        'Status',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class, 'Id_Service', 'Id_Service');
    }

    public function order()
    {
        return $this->belongsTo(Order::class, 'Id_Order', 'Id_Order');
    }

    public function payment()
    {
        return $this->belongsTo(Payment::class, 'Id_Payment', 'Id_Payment');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'Id_User', 'Id_User');
    }
    // public function detail()
    // {
    //     return $this->belongsTo(Detail::class, 'Id_Detail');
    // }
}


