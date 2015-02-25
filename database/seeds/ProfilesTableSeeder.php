<?php
/**
 * Created by PhpStorm.
 * User: Shane
 * Date: 2/24/2015
 * Time: 11:49 PM
 */

namespace database\seeds;


use App\Models\Profile;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProfilesTableSeeder extends Seeder{

    public function run()
    {
        $faker = Faker::create();

        DB::table('profiles')->delete();

        Profile::create([
            'username'  => 'Shadow',
            'email'     => 'shane@gmail.com',
            'password'  => '1234'
        ]);

        User::create([
            'username'  => 'Fearon',
            'email'     => 'fearon@gmail.com',
            'password'  => '1234'
        ]);

        User::create([
            'username'  => 'Jermaine',
            'email'     => 'jermain@gmail.com',
            'password'  => '1234'
        ]);

    }

}