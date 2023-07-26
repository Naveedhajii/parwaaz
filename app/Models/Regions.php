<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\LocalCouncil;

class Regions extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function localcouncils()
    {
        return $this->hasMany(LocalCouncil::class);
    }
}
