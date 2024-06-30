<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table ='seller';
    protected $primaryKey = 'Id_Seller';
    protected $fillable = [
        'Id_User',
        'Identity_Card',
        'Account_Number',
        'Username',
        'Password',
    ];

    public function user() {
        return $this->belongsTo(User::class, 'Id_User');
    }
    
}
