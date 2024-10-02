<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customer';
    protected $primaryKey = 'kode_customer';
    public $incrementing = true;
    protected $keyType = 'String';
    
    protected $fillable = [
        'kode_customer',
        'nama',
        'alamat',
        'no_telp',
        'email',
        'password',
];
}
