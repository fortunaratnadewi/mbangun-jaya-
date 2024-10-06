<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';
    
    protected $fillable = [
        // 'kode_customer',
        'nama',
        'alamat',
        'no_telp',
        'email',
        'password',

    
];

protected $hidden = [
    'password', 'remember_token',
];

protected $casts = [
    'email_verified_at' => 'datetime',
];

}
