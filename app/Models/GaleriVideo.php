<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GaleriVideo extends Model
{
    use HasFactory;
    protected $fillable = [
        'judul',
        'cover',
        'embed',
        'keterangan'
    ];
    function user()
    {
        return $this->belongsTo(User::class);
    }
    public $timestamps = false;
    protected $primaryKey = 'id';
}
