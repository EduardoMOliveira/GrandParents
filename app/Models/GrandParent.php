<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GrandParent extends Model
{

    protected $table = 'grand_parents';

	protected $fillable = ['name'];

    public function parents()
    {
        return $this->hasMany(Parents::class);
    }

}
