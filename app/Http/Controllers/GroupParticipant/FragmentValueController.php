<?php

namespace App\Http\Controllers\GroupParticipant;

use App\Http\Controllers\Controller;
use App\Models\FragmentValue;
use App\Models\GroupParticipant;
use App\Models\UserStudentClass;
use App\Support\Constants\Position;
use App\Support\Constants\TypeGroupActivity;
use Illuminate\Http\Request;

class FragmentValueController extends Controller
{
    public function create()
    {
        $studentClassId = UserStudentClass::toBase()->where('user_id', auth()->id())->first()->student_class_id;

        $usersStudentClass = UserStudentClass::with(['user' => fn ($query) => $query->orderBy('student_number', 'asc')])
            ->where('student_class_id', $studentClassId)
            ->get()
            ->sortBy('user.student_number');

        $userPositions = Position::ALL_KEY_LABEL;

        return view('pages.group-participant.fragment-value', compact('usersStudentClass', 'userPositions'));
    }

    public function store()
    {
        $isAllParticipants = request('is_all_participants');
        $fragmentValue = FragmentValue::findOrFail(request('fragment_value_id'));
        if ($isAllParticipants) {
            $fragmentValue->update(['is_all_users_student_class' => true]);
            // TODO: REMOVE DD
            return dd('updated');
        }

        $fragmentValue->update(['is_all_users_student_class' => false]);
        $groupParticipantsIds = request('group_participants');

        foreach ($groupParticipantsIds as $groupParticipantId) {
            GroupParticipant::create([
                'group_activity_id' => $fragmentValue->id,
                'type_group_activity_id' => TypeGroupActivity::FRAGMENT_VALUE,
                'user_student_class_id' => $groupParticipantId,
            ]);
        }

        // TODO: REMOVE DD
        return dd(GroupParticipant::all());
    }
}
