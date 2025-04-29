<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $user = new User();

        $user->name = "Alberto Salazar";
        $user->email = "dsalazar1982@yahoo.com";
        $user->password = bcrypt('alberto');

        $user->save();


        $user = new User();

        $user->name = "Cristina Sabogal";
        $user->email = "dsabogal1982@yahoo.com";
        $user->password = bcrypt('cristina');

        $user->save();
    }
}
