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
        'user_id',
        'deleted_by',
    ];

    public function groupActivity()
    {
        return $this->belongsTo(GroupActivity::class, 'group_activity_id');
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
