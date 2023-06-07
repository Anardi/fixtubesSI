<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penggunaModel extends Model
{
    use HasFactory;
    protected $table = "data_pengguna";
    protected $primaryKey = "id_pengguna";
    protected $keyType = "string";
    protected $guarded = [];
}
