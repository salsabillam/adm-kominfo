<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;
    protected $fillable = [
        'judul', 'tgl', 'user_id', 'cover',
    ];
    public $timestamps = false;
    function user()
    {
        return $this->belongsTo(User::class);
    }
    function galerifoto()
    {
        return $this->hasMany(GaleriFoto::class, 'album_id');
    }
    protected $primaryKey = 'id';
}
