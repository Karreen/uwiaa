<?php namespace database\seeds;

use App\Models\Role;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleTableSeeder extends Seeder{

    public function run()
    {
        $fake = Factory::create();

        DB::table('roles')->delete();

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