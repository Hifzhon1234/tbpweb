<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    const validation_rules = [
        'name' => 'required'
    ];
    
    protected $guarded = [];

    public function departments()
    {
        return $this->hasMany(Department::class);
    }
}
