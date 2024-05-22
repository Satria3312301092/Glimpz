<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $table = 'invoice';
    protected $primaryKey = 'Id_Invoice';

    protected $fillable = [
        'Id_User',
        'Id_Payment',
        'Id_Order',
        'Id_Service',
        'Name',
        'Email',
        'Number_Phone',
        'Description',
        'Title',
        'Category',
        'Price',
        'Day',
        'Revision',
        'Total',
        'Proof',
        'Methode',
        'Thumbnail',
        'Status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'Id_User');
    }

    public function payment()
    {
        return $this->belongsTo(Payment::class, 'Id_Payment');
    }

    public function order()
    {
        return $this->belongsTo(Order::class, 'Id_Order');
    }

    public function service()
    {
        return $this->belongsTo(Service::class, 'Id_Service');
    }
}
