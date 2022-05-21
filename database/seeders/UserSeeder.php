<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
            'name' => 'cacao',
            'surname' => 'cacao2',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'email' => 'cacao@cacao.it',
            'role' => 'admin',
            'password' => \Hash::make('123456'),
        ]);
    }
}
