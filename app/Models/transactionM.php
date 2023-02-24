<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transactionM extends Model
{
    use HasFactory;
    protected $table = 'transaction';
    protected $fillable = [
        'nama_pelanggan', 'nomor_unik', 'uang_bayar', 'uang_kembali'
    ];
}
