<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    protected $table = 'type';
    protected $primaryKey = 'Id_Type';

    protected $fillable = [
        'Id_Service',
        'Type_Name',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class, 'Id_Service');
    }

    public function details()
    {
        return $this->hasMany(Detail::class, 'Id_Type');
    }
}
