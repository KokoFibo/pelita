<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelitadata extends Model
{
    use HasFactory;
    protected $table = 'pelitadata';
    protected $guarded = [];

    public function daerah()
    {
        return $this->belongsTo(Daerah::class);
    }
}
