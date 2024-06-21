<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{   
    use HasFactory;
    public $timestamps = false;
    protected $table ='detail';
    protected $primaryKey = 'Id_Detail';
    protected $fillable = [
        'Id_Service',
        'Id_Type',
        'Day',
        'Revision',
        'Price',
        'Description',
    ];

    public function types(){
        return $this->belongsTo(Type::class, 'Id_Type');
    }

    

}
