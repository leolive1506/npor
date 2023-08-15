<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupParticipant extends Model
{
    use HasFactory;

    protected $table = 'group_participants';
    protected $fillable = [
        'group_activity_id',
        'type_group_activity_id',
        'user_student_class_id',
        'deleted_by',
    ];

    public function typeGroupActivity()
    {
        return $this->belongsTo(TypeGroupActivity::class, 'type_group_activity_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function deletedBy()
    {
        return $this->belongsTo(User::class, 'deleted_by');
    }
}
