<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Concore Academics',
            'email'=>'info@concoreacademics.co.za',
            'password'=>bcrypt('password'),
            'email_verified_at'=> now(),
            'role_id'=>1,
        ]);
    }
}
