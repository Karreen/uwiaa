<?php
/**
 * Created by PhpStorm.
 * User: Shane
 * Date: 4/16/2015
 * Time: 7:00 PM
 */

namespace database\seeds;


use App\Models\Alert;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlertTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('alerts')->delete();

        Alert::create([
            'name' => 'urgent'
        ]);

        Alert::create([
            'name' => 'important'
        ]);

        Alert::create([
            'name' => 'normal'
        ]);
    }
}