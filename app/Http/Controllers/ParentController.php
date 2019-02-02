<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GrandParent;

class ParentController extends Controller
{
    private $parents;

    public function __construct()
    {
        $this->parents = GrandParent::with('parents')->get();
    }

    protected function getParent($grandparent_id)
    {
        if ($grandparent_id) {
            return $parents = GrandParent::with('parents')->where('id', $grandparent_id)->get();
        } else {
            return $this->parents;
        }
    }

}
