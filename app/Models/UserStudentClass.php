<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserStudentClass extends Model
{
    use HasFactory;
    protected $table = 'user_student_classes';
    protected $fillable = ['user_id', 'student_class_id', 'position_id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function studentClass()
    {
        return $this->belongsTo(StudentClass::class, 'student_class_id');
    }

    public function position()
    {
        return $this->belongsTo(Position::class, 'position_id');
    }
}
