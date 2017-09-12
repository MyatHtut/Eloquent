<?php
/**
 * Created by PhpStorm.
 * User: myathtut
 * Date: 7/20/17
 * Time: 7:45 AM
 */
namespace App\Services;

class TestingService
{
    public function __construct()
    {

    }

    public function allUser($user)
    {
        $users = $user->find(1)->product;
        foreach ($users as $user) {
            echo $user->user_id;
            echo "<br>";
            echo $user->name;
            echo "<br>";

        }
    }


}