<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table ='service';
    protected $primaryKey = 'Id_Service';
    protected $fillable = [
        'Id_Seller',
        'Title',
        'Description',
        'Category',
        'Thumbnail',
    ];

    public function types(){
        return $this->hasMany(Type::class, 'Id_Service');
    }
}