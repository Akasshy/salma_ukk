<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompentencyStandard extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function competencyElements()
    {
        return $this->hasMany(CompetencyElement::class, 'competency_id');
    }
    public function major(){
        return $this->belongsTo(Major::class);
    }
    public function assessor(){
        return $this->belongsTo(Assessor::class);
    }

}
