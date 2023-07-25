<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class
StudentClass extends Model
{
    use HasFactory;

    protected $table = 'student_classes';
    protected $fillable = [
        'name',
        'description',
        'photo',
        'code_class_id'
    ];

    public function usersStudentClass()
    {
        return $this->hasMany(UserStudentClass::class, 'student_class_id');
    }
}
