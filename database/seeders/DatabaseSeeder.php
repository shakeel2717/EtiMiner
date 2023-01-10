<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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

        // \App\Models\User::factory()->create([
        //     'name' => 'shakeel2717',
        //     'username' => 'shakeel2717',
        //     'email' => 'shakeel2717@gmail.com',
        //     'password' => Hash::make('asdfasdf'),
        //     'email_verified_at' => now(),
        // ]);

        \App\Models\Coin::factory()->create([
            'name' => 'Bitcoin',
            'symbol' => 'BTC',
            'img' => 'btc.svg',
        ]);

        \App\Models\Coin::factory()->create([
            'name' => 'BNB Coin (BSC Chain)',
            'symbol' => 'BNB.BSC',
            'img' => 'bnb.svg',
        ]);


        \App\Models\Coin::factory()->create([
            'name' => 'TRON',
            'symbol' => 'TRX',
            'img' => 'trx.svg',
        ]);

        \App\Models\Coin::factory()->create([
            'name' => 'Dogecoin',
            'symbol' => 'DOGE',
            'img' => 'doge.svg',
        ]);


        \App\Models\Setting::factory()->create([
            'key' => 'free_bonus',
            'value' => 120,
        ]);
    }
}
