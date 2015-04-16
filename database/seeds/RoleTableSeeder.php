<?php namespace database\seeds;

use App\Models\Role;
use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleTableSeeder extends Seeder{

    public function run()
    {
        DB::table('roles')->delete();

        $allRoles = [
            'member', 'alumni', 'student', 'mentor', 'admin'
        ];

//        foreach ($allRoles as $newRole)
//        {
//            Role::create(([
//                'name' => $newRole,
//            ]));
//        }

        Role::create([
            'name' => 'member',
        ]);

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

        $users = User::all();


    }
}