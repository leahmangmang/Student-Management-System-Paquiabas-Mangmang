<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $fillable = [
        'subject_name',
        'schedule',
        'teacher'
    ];
    // public function student()
    // {
    //     return $this->belongsTo(Student::class);
    // }
    public function students()
    {
        return $this->belongsToMany(Student::class);
    }
}
