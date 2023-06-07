<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class poliklinikModel extends Model
{
    use HasFactory;
    protected $table = "data_poliklinik";
    protected $primaryKey = "kode_poliklinik";
    protected $keyType = 'string';
    protected $guarded = [];
}
