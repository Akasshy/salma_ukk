<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompetencyElement extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function competencyStandard()
    {
    return $this->belongsTo(compentencyStandard::class, 'competency_id');
    }
    public function examination(){
        return $this->hasMany(Examination::class);
    }



}
