<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GrandParent;

class GrandParentsController extends Controller
{

    private $grandParents;

    public function __construct()
    {

        $parents = [];
        $data = GrandParent::all();

        foreach($data as $k => $parent) {

            $parents[] = ['id' => $parent->id, 'name'=> $parent->name];

        }

        $this->grandParents = $parents;

    }

    protected function getGrandParent()
    {
        return $this->grandParents;
    }

    protected function setGrandParent($value)
    {
        $this->grandParents[] = $value;
    }

    public function index()
    {

        $data = $this->getGrandParent();

        return view('parents.grand-parents', compact('data'));
    }

}
