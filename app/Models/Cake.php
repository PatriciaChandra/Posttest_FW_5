<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cake extends Model
{
    use HasFactory;

    public function menu()
    {
        return $this->belongsTo(Menu::class, 'menu_id');
    }

    protected $table = 'cakes';
    protected $fillable = ['id', 'tipe_cake', 'banyak_layer', 'ukuran_cake', 'jumlah_lilin', 'pesan_pada_cake', 'menu_id'];
}
