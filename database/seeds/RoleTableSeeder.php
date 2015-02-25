<?php
/**
 * Created by PhpStorm.
 * User: Shane
 * Date: 2/24/2015
 * Time: 11:49 PM
 */

namespace database\seeds;

use App\Models\Role;
use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder{

    public function run()
    {
        $fake = Factory::create();

        Role::truncate();

        Role::create([
            'name' => 'student',
        ]);

        Role::create([
            'name' => 'alumni',
        ]);

        Role::create([
            'name' => 'mentor',
        ]);

        Role::create([
            'name' => 'admin',
        ]);
    }

}