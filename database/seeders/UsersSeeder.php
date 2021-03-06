<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::factory()->count(10)->create();
        $users = collect([
            [
                'name' => 'admin',
                'username' => 'admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('password'),
                'email_verified_at' => Carbon::now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'superadmin',
                'username' => 'superadmin',
                'email' => 'superadmin@admin.com',
                'password' => Hash::make('password'),
                'email_verified_at' => Carbon::now(),
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
        // ])->each(function ($user) {
        //     // User::create($user);
        //     DB::table('users')->insert($user);
        // });

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
