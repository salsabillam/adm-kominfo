<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GaleriFoto extends Model
{
    use HasFactory;
    protected $fillable = [
        'album_id',
        'judul',
        'foto',
        'keterangan'
    ];
    function user()
    {
        return $this->belongsTo(User::class);
    }
    function album()
    {
        return $this->belongsTo(Album::class, 'album_id');
    }
    public $timestamps = false;
    protected $primaryKey = 'id';
}
