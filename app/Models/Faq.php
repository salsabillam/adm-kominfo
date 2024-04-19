<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;
    protected $fillable = [
        'pertanyaan',
        'jawaban',
    ];
    function user()
    {
        return $this->belongsTo(User::class);
    }
    public $timestamps = false;
    protected $primaryKey = 'id';
}
