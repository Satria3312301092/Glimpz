<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;


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

    public function getProfileImageAttribute()
    {
        if ($this->Picture) {
            return Storage::url($this->Picture);
        }
        return Storage::url('thumbnail/default-glimpz.png');
    }
}
