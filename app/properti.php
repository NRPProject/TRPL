<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class properti extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'propertis';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['judul_penjualan', 'deskripsi', 'kecamatan', 'alamat', 'luas_bangunan', 'harga_permintaan', 'gambar'];

    
}
