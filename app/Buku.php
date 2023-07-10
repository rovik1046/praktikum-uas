<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = "tb_buku";

    protected $primaryKey = 'buku_id';

    protected $fillable = ['buku_kode', 'buku_judul',
    'buku_kategori', 'buku_penerbit'];
}
