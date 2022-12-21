<?php

namespace App\Models;

use App\Models\Kategori;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $guarded =['id'];
    protected $with = ['kategori'];

    public function kategori()
    {
        return $this->belongsTo('kategori_id', Kategori::class);
    }
}
