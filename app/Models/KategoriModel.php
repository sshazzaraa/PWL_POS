<?php

namespace App\Models;

use App\Http\Controllers\KategoriController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class KategoriModel extends Model
{
    protected $table = 'kategori_models'; // Ensure correct table name

    public function kategori()
    {
        return $this->belongsTo(KategoriController::class, 'foreign_key', 'other_key'); // Adjust keys according to your schema
    }
}
