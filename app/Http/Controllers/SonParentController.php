<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SonParentController extends Controller
{
    public function getSon(Request $request)
    {

        $son_parent_id = 0;

        foreach($request->message as $parent_id) {

            $son_parent_id += $parent_id;
        }

        $son = DB::select('select so.name, so.age from parents p
                                inner join parents_x_son_parents s
                                on p.id = s.parent_id
                                inner join son_parents so
                                on so.id = s.son_parent_id
                                where s.son_parent_id = ' . $son_parent_id);

        //('sonParents')->where('son_parent_id', $son_parent_id)->get();

        $response = array(
            'statusCode' => '201',
            'msg' => $son,
        );
        return response()->json($response);
    }
}
