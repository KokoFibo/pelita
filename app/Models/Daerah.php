<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daerah extends Model
{
    use HasFactory;
    protected $table = 'daerah';
    protected $guarded = [];

    public function pelitadata()
    {
        return $this->hasMany(Pelitadata::class);
    }
}
