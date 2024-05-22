<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;

    protected $table = 'detail';
    protected $primaryKey = 'Id_Detail';

    protected $fillable = [
        'Id_Service',
        'Id_Type',
        'Day',
        'Revision',
        'Price',
        'Description',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class, 'Id_Service');
    }

    public function type()
    {
        return $this->belongsTo(Type::class, 'Id_Type');
    }
}
