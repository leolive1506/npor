<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeGroupActivity extends Model
{
    use HasFactory;

    protected $table = 'type_group_activities';
    protected $fillable = ['name', 'description'];
}
