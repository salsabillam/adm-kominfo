<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriHalStatis extends Model
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
    function statis()
    {
        return $this->hasMany(HalStatis::class, 'kategori_hal_statis_id');
    }
    public $timestamps = false;
    protected $primaryKey = 'id';
}
