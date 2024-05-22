<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'order';
    protected $primaryKey = 'Id_Order';

    protected $fillable = [
        'Id_User',
        'Id_Service',
        'Date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'Id_User');
    }

    public function service()
    {
        return $this->belongsTo(Service::class, 'Id_Service');
    }

    public function payments()
    {
        return $this->hasMany(Payment::class, 'Id_Order');
    }

    public function invoices()
    {
        return $this->hasMany(Invoice::class, 'Id_Order');
    }
}
