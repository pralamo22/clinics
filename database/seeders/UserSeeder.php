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
        $user = new User();
        $user->name = "admin";
        $user->email = "admin@admin.com";
        $user->password = bcrypt("password");
        $user->save();

        $user = new User();
        $user->name = "Pablo";
        $user->email = "pablo@pablo.com";
        $user->password = bcrypt("12345678");
        $user->save();

        $user = new User();
        $user->name = "Pablo2";
        $user->email = "pablo2@pablo.com";
        $user->password = bcrypt("12345678");
        $user->save();
    }
}
