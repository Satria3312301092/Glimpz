<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    
    protected $table = 'service';
    protected $primaryKey = 'Id_Service';

    protected $fillable = [
        'Id_Seller',
        'Title',
        'Description',
        'Category',
        'Thumbnail',
    ];

    public function seller()
    {
        return $this->belongsTo(Seller::class, 'Id_Seller');
    }

    public function types()
    {
        return $this->hasMany(Type::class, 'Id_Service');
    }

    public function details()
    {
        return $this->hasMany(Detail::class, 'Id_Service');
    }

    public function orders()
    {
        return $this->hasMany(Order::class, 'Id_Service');
    }

    public function invoices()
    {
        return $this->hasMany(Invoice::class, 'Id_Service');
    }
}
 