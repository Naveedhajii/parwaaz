<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Jk;


class Prenatal extends Model
{
    use HasFactory;
    protected $fillable = [
        'jk_id',
        'prenatal_session_date',
        'parwaaz_coordinator',
        'facilitator_names',
        'mother_name',
        'cnic_number',
        'mobile_number',
        'guardian_name',
        'guardian_relation',
    ];

    // Define the relationship (if any)
    // For example, assuming a relationship with the 'jk' table:
    public function jk()
    {
        return $this->belongsTo(Jk::class, 'jk_id');
    }
}
