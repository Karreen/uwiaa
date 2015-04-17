<?php namespace database\seeds;

use App\Models\Alert;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleTableSeeder extends Seeder{

    public function run()
    {
        DB::table('roles')->delete();
        DB::table('alerts')->delete();

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

        Alert::create([
            'name' => 'urgent'
        ]);

        Alert::create([
            'name' => 'important'
        ]);

        Alert::create([
            'name' => 'normal'
        ]);

        $users = User::all();
        
        $member = Role::whereName('member')->get()->first();
        $alumni = Role::whereName('alumni')->get()->first();

        foreach($users as $user)
        {
            $user->assignRole($member);
            $user->assignRole($alumni);
        }


    }
}