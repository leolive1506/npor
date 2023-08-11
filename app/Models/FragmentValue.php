<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FragmentValue extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'value_total', 'created_by', 'closed_by'];

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function closedBy()
    {
        return $this->belongsTo(User::class, 'closed_by');
    }
}
