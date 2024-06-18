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
        return $this->belongsTo(Detail::class, 'Id_Detail');
    }
}

