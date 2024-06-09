<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table ='invoice';
    protected $primaryKey = 'Id_Invoice';
    protected $fillable = [
        'Id_User',
        'Id_Payment',
        'Id_Order',
        'Id_Service',
        'Name',
        'Email',
        'Number_Phone',
        'Description',
        'Title',
        'Category',
        'Price',
        'Day',
        'Revision',
        'Total',
        'Proof',
        'Methode',
        'Thumbnail',
        'Status',
    ];
}
