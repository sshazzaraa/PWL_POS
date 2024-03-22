<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class KategoriModel extends Model
{

    protected $table = 'm_kategori'; //Mendefinisikan nama tabel yang digunakan oleh model ini
    protected $primaryKey = 'kategori_id'; //Mendefinisikan primary key dari tabel yang digunakan

    protected $fillable = ['kategori_kodd', 'kategori_nama'];

    public function barang(): HasMany
    {
        return $this->hasMany(BarangModel::class, 'barang_id', 'barang_id');
    }
}
