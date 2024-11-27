<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
    public function major(){
        return $this->belongsTo(Major::class, 'id');
    }
    public function examination(){
        return $this->hasMany(Examination::class);
    }
    protected $fillable = [
        'user_id',
        'nisn',
        'grade_level',
        'major_id',
    ];



}
