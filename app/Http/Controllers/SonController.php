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

    public function getSonsAjax($grand_parents_id)
    {
        echo json_encode($this->getSons($grand_parents_id));
    }
}
