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

    protected function getParents($grand_parent_id)
    {
        if ($grand_parent_id) {

            return $this->parents = $parents = GrandParent::with('parents')->where('id', $grand_parent_id)->get();

        } else {

            return $this->parents;
        }
    }

    public function getParentsAjax($grand_parent_id)
    {
        echo json_encode($this->getParents($grand_parent_id));
    }
}
