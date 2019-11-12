<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
 protected $table = 'buku';
 protected $fillable = ['judul', 'pengarang', 'penerbit', 'tahun', 'stok', 'gambar'];

public function cover() {
    if(!$this->gambar) {
        return asset('imagess/default.jpg');
    }
    return asset('images/'.$this->gambar);
}

}