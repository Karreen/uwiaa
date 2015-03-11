<?php
/**
 * Created by PhpStorm.
 * User: Shane
 * Date: 3/8/2015
 * Time: 5:05 PM
 */

namespace App\Repositories\Interfaces;


interface RoleRepositoryInterface {

    public function create($name);

    public function delete($id);

    public function deleteByName($name);

    public function update($id, $name);

    public function usersWithRole($role);

}