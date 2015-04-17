<?php
/**
 * Created by PhpStorm.
 * User: Shane
 * Date: 4/17/2015
 * Time: 12:34 AM
 */

namespace database\seeds;


use Illuminate\Database\Seeder;

class BlogTableSeeder extends Seeder{

    public function run()
    {
        DB::table('articles')->delete();


    }

}