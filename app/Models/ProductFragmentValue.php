<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductFragmentValue extends Model
{
    use HasFactory;

    protected $table = 'products_fragment_values';
    protected $fillable = ['name', 'value', 'quantity', 'fragment_value_id'];

    public function fragmentValue()
    {
        return $this->belongsTo(FragmentValue::class, 'fragment_value_id');
    }
}
