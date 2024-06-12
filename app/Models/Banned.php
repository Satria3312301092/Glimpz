<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banned extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table ='banned';
    protected $primaryKey = 'Id_Ban';
    protected $fillable = [
        'Id_User',
        'Number_Phone',
        'Name',
        'Email'
    ];

    public function Banneds(){
        return $this->belongsTo(Banned::class, 'Id_Ban');
    }
}
