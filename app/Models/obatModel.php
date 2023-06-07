<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class obatModel extends Model
{
    use HasFactory;
    protected $table = "data_obat";
    protected $primaryKey = "kode_obat";
    protected $guarded = [];
}

