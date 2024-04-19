<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;
    protected $fillable = [
        'judul',
        'kategori_berita_id',
        'isi',
        'gambar',
        'tgl',
        'status',
        'user_id'
    ];
    function kategori_berita()
    {
        return $this->belongsTo(KategoriBerita::class, 'kategori_berita_id');
    }
    function user()
    {
        return $this->belongsTo(User::class);
    }
    public $timestamps = false;
    protected $primaryKey = 'id';
}
