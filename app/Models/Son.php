<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Son extends Model
{
    protected $table = 'sons';

    protected $fillable = ['name', 'grand_parents_id'];

    public function grandParent()
    {
        return $this->belongsTo(GrandParents::class);
    }
}
