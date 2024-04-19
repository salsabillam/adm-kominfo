<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HalStatis extends Model
{
    use HasFactory;
    protected $fillable = [
        'judul',
        'kategori_hal_statis_id',
        'isi',
        'file',
        'tgl',
        'user_id'
    ];
    function user()
    {
        return $this->belongsTo(User::class);
    }
    function kategori()
    {
        return $this->belongsTo(KategoriHalStatis::class, 'kategori_hal_statis_id');
    }
    public $timestamps = false;
    protected $primaryKey = 'id';
}
