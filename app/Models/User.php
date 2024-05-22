<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $table = 'user';
    protected $primaryKey = 'Id_User';

    protected $fillable = [
        'Picture',
        'Number_Phone',
        'Email',
        'Name',
        'Date_Of_Birth',
        'Username',
        'Password',
        'Role',
    ];

    public function sellers()
    {
        return $this->hasOne(Seller::class, 'Id_User');
    }

    public function administrators()
    {
        return $this->hasOne(Administrator::class, 'Id_User');
    }

    public function banned()
    {
        return $this->hasOne(Banned::class, 'Id_User');
    }

    public function orders()
    {
        return $this->hasMany(Order::class, 'Id_User');
    }

    public function payments()
    {
        return $this->hasMany(Payment::class, 'Id_User');
    }

    public function invoices()
    {
        return $this->hasMany(Invoice::class, 'Id_User');
    }
}
