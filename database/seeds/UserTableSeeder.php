<?php
/**
 * Created by PhpStorm.
 * User: Shane
 * Date: 2/24/2015
 * Time: 11:48 PM
 */

namespace database\seeds;


use App\Models\User;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder{

    public function run()
    {
        $faker = Faker::create();

        User::truncate();

        User::create([
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

        foreach (range(1, 30) as $index)
        {
            User::create([
                'username'  => $faker->unique()->userName,
                'email'     => $faker->unique()->email,
                'password'  => '1234'
            ]);
        }

//        $table->increments('id');
//        $table->string('username', 20)->unique();
//        $table->string('email')->unique();
//        $table->string('password', 100);
//        $table->timestamp('last_login')->nullable();
//        $table->rememberToken();
//        $table->timestamps();

    }
}