<?php

namespace Database\Seeders;

use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Marlon',
            'email' => 'marlon@111.com.ec',
            'password' => Hash::make('marlon123')
        ]);

        User::create([
            'name' => 'Steven',
            'email' => 'steven@111.com.ec',
            'password' => Hash::make('steven123')
        ]);

    }
}
