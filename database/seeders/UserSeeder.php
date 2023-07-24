<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $richard = new User;
        $richard->name = "Richard";
        $richard->email = "richard@iconica.mx";
        $richard->password = Hash::make("Pass123");
        $richard->save();
    }
}
