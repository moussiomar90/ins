<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(['id'=>1198,'name'=>'admin', 'email'=>'admin2@admin.com',
         'email_verified_at'=> now(),    'password'=> bcrypt('Insaniyyat@tun')]);
    }
}
