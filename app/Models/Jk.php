<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\LocalCouncil;
use App\Models\Facilitator;
use App\Models\Prenatal;

class Jk extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'localcouncil_id',
    ];

    // Define the relationship (if any)
    // For example, assuming a relationship with the 'localcouncil' table:
    public function localcouncil()
    {
        return $this->belongsTo(LocalCouncil::class, 'localcouncil_id');
    }

    public function facilitators()
    {
        return $this->hasMany(Facilitator::class);
    }
    public function prenatals()
    {
        return $this->hasMany(Prenatal::class);
    }
}
