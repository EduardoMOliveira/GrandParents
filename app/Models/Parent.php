<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parents extends Model
{
    protected $table = 'parents';

    protected $fillable = ['name', 'grand_parents_id'];

    public function grandParent()
    {
        return $this->belongsTo(GrandParents::class);
    }

    // Método responsável para relacionar a tabela pivó
    public function sonParents()
    {
        return $this->belongsToMany(SonParents::class, 'parents_x_sons');
    }
}
