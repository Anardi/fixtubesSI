<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pasienModel extends Model
{
    use HasFactory;
    protected $table = "data_pasien";
    protected $primaryKey = "kode_pasien";
    protected $keyType = "string";
    protected $guarded = [];

    // relational
    public function dokter() {
        return $this->hasMany(dokter::class);
    }
}
