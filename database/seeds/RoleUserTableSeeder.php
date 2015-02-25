<?php
/**
 * Created by PhpStorm.
 * User: Shane
 * Date: 2/25/2015
 * Time: 12:10 AM
 */

namespace database\seeds;


class RoleUserTableSeeder {

    public function run()
    {
        DB::table('role_user')->delete();
    }
}