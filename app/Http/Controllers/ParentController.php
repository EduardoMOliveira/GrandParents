<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GrandParent;

class ParentController extends Controller
{
    private $parents;

    public function __construct()
    {
        $this->parents = $parents = GrandParent::with('parents')->get();
    }

    protected function getParents($grandparent_id)
    {
        if ($grandparent_id) {

            return $this->parents = $parents = GrandParent::with('parents')->where('id', $grandparent_id)->get();

        } else {

            return $this->parents;
        }
    }

    public function getParentsAjax($grandparent_id)
    {
        echo json_encode($this->getParents($grandparent_id));
    }
}
