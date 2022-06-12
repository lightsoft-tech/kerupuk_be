<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Auth\Events\Registered;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Role::create([
            'name' => 'admin',
            'guard_name' => 'web',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Role::create([
            'name' => 'customer',
            'guard_name' => 'web',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        $admin = User::create([
            'username' => 'admin',
            'name' => 'admin akun',
            'email' => 'admin@gmail.com',
            'birthday' => Carbon::create('2000', '01', '01'),
            'phone_number' => '-',
            'address' => '-',
            'password' => bcrypt('admin123'),
            'remember_token' => \Str::random(60),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $admin->assignRole('admin');
        event(new Registered($admin));
    }
}
