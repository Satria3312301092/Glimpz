<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrator extends Model
{
    use HasFactory;

    protected $table = 'administrator';
    protected $primaryKey = 'Id_Admin';

    protected $fillable = [
        'Id_User',
        'Username',
        'Password',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'Id_User');
    }

}
