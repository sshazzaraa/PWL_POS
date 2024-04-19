<?php

namespace App\Models;

use App\Http\Controllers\BarangController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StokModel extends Model
{
    use HasFactory;

    use HasFactory;

    protected $table = 't_stok';
    protected $primaryKey = 'stok_id';

    protected $guarded = 'stok_id';

    function barang(): BelongsTo
    {
        return $this->belongsTo(BarangController::class, 'barang_id', 'barang_id');
    }

    function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }
}
