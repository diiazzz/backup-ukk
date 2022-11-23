<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $guarded =['nm_produk','stock_produk','harga_produk','deskripsi_produk','foto_produk'];
}
