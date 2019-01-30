<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GrandParents extends Model
{

    protected $table = 'grand_parents';

	protected $fillable = ['name'];

    public function sons()
    {
        return $this->hasMany(Son::class);
    }

}
