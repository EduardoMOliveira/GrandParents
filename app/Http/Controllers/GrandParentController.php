<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GrandParent;

class GrandParentController extends Controller
{

    private $grandParent;

    public function __construct()
    {

        $parents = [];
        $data = GrandParent::all();

        foreach($data as $k => $parent) {

            $parents[] = ['id' => $parent->id, 'name'=> $parent->name];

        }

        $this->grandParent = $parents;

    }

    protected function getGrandParent()
    {
        return $this->grandParent;
    }

    protected function setGrandParent($value)
    {
        $this->grandParent[] = $value;
    }

    public function index()
    {

        $data = $this->getGrandParent();

        return view('parents.grandparent', compact('data'));
    }

}
