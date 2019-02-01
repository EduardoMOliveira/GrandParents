<?php

use Illuminate\Database\Seeder;
use App\Models\Parents;

class RelationshipParentSonParentsTableSeeder extends Seeder
{
   
    public function run()
    {

        $parents = Parents::all()->pluck('id');
        //$parents = Parents::all()->pluck('id')->toArray();

        $faker = Faker\Factory::create();

        foreach ($parents as $parent) {
            
            //dd(gettype($parent));
            
            $son_parent_id = $faker->randomElement($parents->toArray()) + $faker->randomElement($parents->toArray());
            
            // dd($son_parent_id);

            $son_parent = DB::table('son_parents')->where('id',$son_parent_id)->get();

            if($son_parent) {
                DB::select('insert into parents_x_son_parents (parent_id, son_parent_id) values (?,?)', [$parent , $son_parent_id]);
            }
        }
    
       

    }
}
