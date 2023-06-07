<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pegawaiModel extends Model
{
    use HasFactory;
    protected $table = "data_pegawai";
    protected $primaryKey = "id_pegawai";
    protected $keyType = "string";
    protected $guarded = [];
}