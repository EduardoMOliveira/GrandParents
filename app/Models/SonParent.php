<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SonParent extends Model
{
    protected $table = 'son_parents';

    protected $fillable = ['codigo', 'name','age', 'parent_id'];

     // Método responsável para relacionar a tabela pivó
    public function parents()
    {
        return $this->belongsToMany(Parents::class, 'parents_x_son_parents');
    }
}
