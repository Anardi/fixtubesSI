<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kamarModel extends Model
{
    use HasFactory;
    protected $table = "data_kamar";
    protected $primaryKey = "kode_kamar";
    protected $keyType = "string";
    protected $guarded = [];
}
