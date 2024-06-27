<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ratings extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table ='ratings';
    protected $primaryKey = 'Id_Rating';
    protected $fillable = [
        'Id_User',
        'Id_Service',
        'Rating',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'Id_User');
    }

    public function service()
    {
        return $this->belongsTo(Service::class,'Id_Service');
    }
    
}
