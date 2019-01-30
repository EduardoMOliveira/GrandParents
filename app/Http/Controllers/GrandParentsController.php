<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GrandParents;

class GrandParentsController extends Controller
{
    
    private $grandParents;

    public function __construct()
    {

        $parents = [];
        $data = GrandParents::all();

        foreach($data as $k => $parent) {

            $parents[] = ['id' => $parent->id, 'name'=> $parent->name]; 
            
        }

        $this->grandParents = $parents;

    }

    protected function getGrandParents()
    {
        return $this->grandParents;
    }

    protected function setGrandParents($value) 
    {
        $this->grandParents[] = $value;
    }

    public function index()
    {
        //$this->grandParents = \App\Models\GrandParents::all();
        
        $data = $this->getGrandParents();
        
        return view('parents.grand-parents', compact('data'));
    }
   
}
