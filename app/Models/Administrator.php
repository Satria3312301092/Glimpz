<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrator extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table ='administrator';
    protected $primaryKey = 'Id_Admin';
    protected $fillable = [
        'Id_User',
        'Username',
        'Password',
    ];

    public function Administrator(){
        return $this->belongsTo(Administrator::class, 'Id_Admin');
    }
    
}
