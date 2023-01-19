<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable =[
        'fullname',
        'gender',
        'date_of_birth',
    ];
    public function contact(){
        return $this->hasOne(Contact::class);
    }

    public function teacher(){
        return $this->belongsTo(Teacher::class);
    }

    public function subjects(){
        return $this->belongsToMany(Subject::class);
    }

}
