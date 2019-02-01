<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grandparent extends Model
{

    protected $table = 'grandparents';

	protected $fillable = ['name'];

    public function parents()
    {
        return $this->hasMany(Parents::class);
    }

}
