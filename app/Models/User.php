<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Laravel\Sanctum\HasApiTokens;

class User extends Model
{
    use HasFactory;

    protected $table = 'user';
    protected $primaryKey = 'Id_User';


    public $timestamps = false;
    protected $table ='user';
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



    public function username() {
        return 'Username';
    }

    public function getAuthPassword() {
        return $this->Password;
    }

    public function users(){
        return $this->belongsTo(Type::class, 'Id_Service');
    }

    public function seller() {
        return $this->hasOne(Seller::class, 'Id_User');
    }

    public function orders()
    {
        return $this->hasMany(Order::class, 'Id_User');
    }
    
}
