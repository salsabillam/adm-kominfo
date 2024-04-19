<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriBerita extends Model
{
    use HasFactory;
    protected $fillable = [
        'kategori',
        'keterangan',
    ];
    function user()
    {
        return $this->belongsTo(User::class);
    }
    function berita()
    {
        return $this->belongsTo(Berita::class, 'kategori_berita_id');
    }
    public $timestamps = false;
    protected $primaryKey = 'id';
}
