<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeaderSlide extends Model
{
    use HasFactory;
    protected $fillable = [
        'judul',
        'file',
        'keterangan',
        'status'
    ];
    function user()
    {
        return $this->belongsTo(User::class);
    }
    public $timestamps = false;
    protected $primaryKey = 'id';
}
