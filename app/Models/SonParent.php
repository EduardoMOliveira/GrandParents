<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SonParent extends Model
{
    protected $fillable = ['name', 'age'];

    // Método responsável para relacionar a tabela pivó
    public function parents()
    {
        return $this->belongsToMany(Parents::class, 'parent_x_son_parent', 'id', 'parent_id');
    }
}
