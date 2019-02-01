<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parents extends Model
{
    protected $table = 'parents';

    protected $fillable = ['name', 'grand_parent_id'];

    public function grandParent()
    {
        return $this->belongsTo(GrandParent::class);
    }

    // Método responsável para relacionar a tabela pivó
    public function sonParents()
    {
        return $this->belongsToMany(Parents::class, 'parent_x_son_parent', 'id', 'parent_id');
    }

}
