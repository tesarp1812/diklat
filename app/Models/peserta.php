<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peserta extends Model
{
    use HasFactory;

    public function nilai()
    {
        return $this->hasMany(Nilai::class);
    }

    protected $fillable = [
        'nama',
        'kolat'
    ];
}
