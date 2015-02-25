<?php
/**
 * Created by PhpStorm.
 * User: Shane
 * Date: 2/24/2015
 * Time: 11:49 PM
 */

namespace database\seeds;


use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PostsTableSeeder extends Seeder
{

//$profile = new Profile($request->only('street', 'city', 'bio', 'github_username'));
//
//$user = User::whereUsername($username)->firstOrFail();
//
//$user->profile()->save($profile);

    public function run()
    {
        $faker = Faker::create();

        DB::table('posts')->delete();

        $user = User::first();

        foreach (range(1, 30) as $index) {
            $post = Post::create([
                'title'     => $faker->sentence,
                'body'      => $faker->paragraph(2),
                'image'     => $faker->imageUrl(300, 200)
            ]);

//            $user->assignPost($post);
        }
    }
}