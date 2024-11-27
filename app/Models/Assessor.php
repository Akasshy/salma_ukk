<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assessor extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function competencyStandard(){
        return $this->hasMany(CompentencyStandard::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function examination(){
        return $this->hasMany(Examination::class);
    }
    protected $fillable = [
        'user_id',
        'assessor_type',
        'description',
    ];



}
