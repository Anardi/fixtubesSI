<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jadwalmodel extends Model
{
    use HasFactory;
    protected $table = "data_jadwal";
    protected $primaryKey = "kode_jadwal";
    protected $keyType = "string";
    protected $guarded = [];
}
