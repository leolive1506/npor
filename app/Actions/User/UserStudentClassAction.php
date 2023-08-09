<?php

namespace App\Actions\User;

use App\Models\UserStudentClass;

class UserStudentClassAction
{
    public static function execute($userId, $studentClassId, $positionId)
    {
        $userStudentClass = UserStudentClass::create([
            'user_id' => $userId,
            'student_class_id' => $studentClassId,
            'position_id' => $positionId
        ]);


        return $userStudentClass;
    }
}
