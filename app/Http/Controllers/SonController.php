<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GrandParents;
use App\Models\Son;

class SonController extends Controller
{
    private $sons;

    public function __construct()
    {
        $this->sons = $sons = GrandParents::with('sons')->get();
    }

    protected function getSons($grand_parents_id)
    {
        if($grand_parents_id) {

            return $this->sons = $sons = GrandParents::with('sons')->where('id', $grand_parents_id)->get();

        } else {

            return $this->sons;
        }
    }

    public function index($grand_parents_id)
    {
        return response($this->getSons($grand_parents_id),200);
    }
}
