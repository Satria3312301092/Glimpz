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
        'Id_Type',
        'Id_Detail',
        'Status',
        'Date',
    ];


    public function service()
    {
        return $this->belongsTo(Service::class, 'Id_Service');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'Id_User');
    }

    public function type()
    {
        return $this->belongsTo(Type::class, 'Id_Type');
    }

    public function detail()
    {
        return $this->hasMany(Detail::class, 'Id_Detail');
    }

    public function seller() {
        return $this->belongsTo(Seller::class, 'Id_Seller');
    }

    
    public function servicess()
{
    return $this->hasMany(Service::class, 'Id_Service', 'Id_Service');
}
    public function typess()
{
    return $this->hasMany(Type::class, 'Id_Type', 'Id_Type');
}
    public function detailss()
{
    return $this->hasMany(Detail::class, 'Id_Detail', 'Id_Detail');
}

    public function paymentss() {
        return $this->belongsTo(Payment::class, 'Id_Order', 'Id_Order');
    }
    public function sellerss()
{
    return $this->hasMany(Seller::class, 'Id_Seller', 'Id_User');
}

// UJI COBA
// public function details()
// {
//     return $this->hasOne(Detail::class, 'Id_Detail');
// }

// public function seller()
// {
//     return $this->belongsTo(Seller::class, 'Id_User','Id_User');
// }

// public function payments()
// {
//     return $this->hasOne(Payment::class, 'Id_Order');
// }
// UJI COBA

//     public function userss()
// {
//     return $this->belongsTo(User::class, 'Id_User', 'Id_User');
// }

    // public function sellerss()
    // {
    //     return $this->hasManyThrough(User::class, Service::class, 'Id_Order', 'Id_User', 'Id_Order', 'Id_Seller')
    //         ->where('users.role', 'seller');
    // }

}

