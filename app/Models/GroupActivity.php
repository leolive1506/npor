<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupActivity extends Model
{
    use HasFactory;

    protected $table = 'group_activities';
    protected $fillable = ['name', 'description'];
}
