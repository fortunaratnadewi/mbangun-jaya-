<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table = 'barang';
    protected $primaryKey = 'kode_barang';
    public $incrementing = true;
    protected $keyType = 'String';
    
    protected $fillable = [
        'kode_barang',
        'nama_barang',
        'kategori',
        'merk',
        'harga_barang',
];

}
