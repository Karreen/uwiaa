<?php namespace database\seeds;

use App\Models\Role;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleTableSeeder extends Seeder{

    public function run(Role $role)
    {
        DB::table('roles')->delete();

        $allRoles = [
            'member', 'alumnus', 'student', 'mentor', 'admin'
        ];

        foreach ($allRoles as $newRole)
        {

        }
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