<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menu';
    protected $fillable = ['Kode_Meja', 'Nama_Pelanggan', 'Menu_Bebek', 'Total', 'Minuman', 'Jumlah'];
}
