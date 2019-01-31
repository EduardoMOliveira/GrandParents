<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GrandParents;
use App\Models\Parents;

class ParentController extends Controller
{
    private $parent;

    public function __construct()
    {
        $this->$parent = GrandParents::with('parents')->get();
    }

    protected function getParents($grand_parents_id)
    {
        if($grand_parents_id) {

            dd('Teste');

            return $this->parent = GrandParents::with('parents')->where('id', $grand_parents_id)->get();

        } else {

            return $this->parent;
        }
    }

    public function getParentsAjax($grand_parents_id)
    {
        echo json_encode($this->getParents($grand_parents_id));
    }
}
