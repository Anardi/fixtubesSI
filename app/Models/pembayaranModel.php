<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembayaranModel extends Model
{
    use HasFactory;
    protected $table = 'data_pembayaran';
    protected $primaryKey = "id_pembayaran";
    protected $keyType = "string";
    protected $guarded = [];
}
