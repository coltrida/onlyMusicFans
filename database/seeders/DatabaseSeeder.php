<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        if (\Storage::disk('public')->exists('/concert/')) {
            \Storage::disk('public')->deleteDirectory('/concert/');
        }

       // \Storage::makeDirectory('/concert');
        /*\Artisan::call('cache:clear');
        \Artisan::call('view:clear');
        \Artisan::call('route:clear');*/

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
