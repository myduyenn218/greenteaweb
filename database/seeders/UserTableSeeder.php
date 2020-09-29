<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder

{

    public function run()
    {

        User::create(array('email' => 'kingtxx98@gmail.com', 'password' => \Hash::make('tanh1998'), 'active' => 1));
    }
}
