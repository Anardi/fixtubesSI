<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dokter extends Model
{
    use HasFactory;
    protected $table = "data_dokter";
    protected $primaryKey = "id_dokter";
    public $incrementing = false;
    protected $keyType = 'string';
    protected $guarded = [];
    // relational
    public function pasien() {
        return $this->belongsTo(pasienModel::class);
    }

}
