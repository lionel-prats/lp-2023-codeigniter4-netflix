<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    public function update($user, $id = null)
    {
        echo $id ? $id : "nada";
        echo "<br>";
        echo $user;
    }
}
