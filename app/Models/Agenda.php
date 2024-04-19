<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;
    protected $fillable = [
        'hari',
        'tgl',
        'waktu',
        'lokasi',
        'kegiatan',
        'user_id'
    ];
    function user()
    {
        return $this->belongsTo(User::class);
    }
    public $timestamps = false;
    protected $primaryKey = 'id';
}
