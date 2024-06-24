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
}
