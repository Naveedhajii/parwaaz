<?php

namespace App\Models;
use App\Models\Jk;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facilitator extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'jk_id',
        'nic',
        'num',
        'email',
        'qualification',
        'profession',
        'dob',
        'training_year',
    ];

    public function jk()
    {
        return $this->belongsTo(Jk::class, 'jk_id');
    }
}
