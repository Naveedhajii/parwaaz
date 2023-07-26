<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\LocalCouncil;
use App\Models\Jk;


class LocalCouncil extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'region_id',
    ];

    // Define the relationship (if any)
    // For example, assuming a relationship with the 'regions' table:
    public function region()
    {
        return $this->belongsTo(Region::class, 'region_id');
    }
    public function jks()
    {
        return $this->hasMany(Jk::class);
    }
}
