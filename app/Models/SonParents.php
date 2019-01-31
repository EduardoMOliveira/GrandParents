<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SonParents extends Model
{
    protected $fillable = ['name','age'];

    // Método responsável para relacionar a tabela pivó
    public function parents()
    {
        return $this->belongsToMany(Parents::class, 'parents_x_sons');
    }
}
