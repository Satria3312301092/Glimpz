<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banned extends Model
{
    use HasFactory;
    
    protected $table = 'banned';
    protected $primaryKey = 'Id_Ban';

    protected $fillable = [
        'Id_User',
        'Number_Phone',
        'Name',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'Id_User');
    }
}
