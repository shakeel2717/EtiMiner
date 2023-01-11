<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Power;
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

        \App\Models\Setting::factory()->create([
            'key' => 'free_bonus',
            'value' => 100,
        ]);


        \App\Models\Setting::factory()->create([
            'key' => 'power_price',
            'value' => 20,
        ]);

        $user = \App\Models\User::factory()->create([
            'name' => 'shakeel2717',
            'username' => 'shakeel2717',
            'email' => 'shakeel2717@gmail.com',
            'password' => Hash::make('asdfasdf'),
            'email_verified_at' => now(),
        ]);

        $power = new Power();
        $power->user_id = $user->id;
        $power->status = true;
        $power->amount = setting("free_bonus");
        $power->type = "Registration";
        $power->sum = true;
        $power->save();


        $user = \App\Models\User::factory()->create([
            'name' => 'test',
            'username' => 'test',
            'email' => 'test@gmail.com',
            'password' => Hash::make('asdfasdf'),
            'email_verified_at' => now(),
        ]);

        $power = new Power();
        $power->user_id = $user->id;
        $power->status = true;
        $power->amount = setting("free_bonus");
        $power->type = "Registration";
        $power->sum = true;
        $power->save();

        \App\Models\Coin::factory()->create([
            'name' => 'Bitcoin',
            'symbol' => 'BTC',
            'price' => 17440.62,
            'img' => 'btc.svg',
        ]);

        \App\Models\Coin::factory()->create([
            'name' => 'BNB Coin (BSC Chain)',
            'symbol' => 'BNB',
            'price' => 278.27,
            'img' => 'bnb.svg',
        ]);


        \App\Models\Coin::factory()->create([
            'name' => 'TRON',
            'symbol' => 'TRX',
            'price' => 0.05513,
            'img' => 'trx.svg',
        ]);

        \App\Models\Coin::factory()->create([
            'name' => 'Dogecoin',
            'symbol' => 'DOGE',
            'price' => 0.07696,
            'img' => 'doge.svg',
        ]);


        \App\Models\Plan::factory()->create([
            'name' => 'Free',
            'percentage' => 2,
            'duration' => 180,
            'min_invest' => 0,
            'max_invest' => 0.99,
            'min_power' => 1,
            'max_power' => 19,
        ]);


        \App\Models\Plan::factory()->create([
            'name' => 'Standard',
            'percentage' => 2.5,
            'duration' => 180,
            'min_invest' => 1,
            'max_invest' => 24.99,
            'min_power' => 20,
            'max_power' => 499,
        ]);

        \App\Models\Plan::factory()->create([
            'name' => 'Advanced',
            'percentage' => 3,
            'duration' => 180,
            'min_invest' => 25,
            'max_invest' => 249.99,
            'min_power' => 500,
            'max_power' => 4999,
        ]);

        \App\Models\Plan::factory()->create([
            'name' => 'Premium',
            'percentage' => 4,
            'duration' => 180,
            'min_invest' => 250,
            'max_invest' => 749.99,
            'min_power' => 5000,
            'max_power' => 14999,
        ]);
        \App\Models\Plan::factory()->create([
            'name' => 'Ultimate',
            'percentage' => 4.5,
            'duration' => 180,
            'min_invest' => 750,
            'max_invest' => 1999.99,
            'min_power' => 15000,
            'max_power' => 39999.99,
        ]);

        \App\Models\Plan::factory()->create([
            'name' => 'Investor',
            'percentage' => 5,
            'duration' => 180,
            'min_invest' => 2000,
            'max_invest' => 999999999.99,
            'min_power' => 40000,
            'max_power' => 100000000000,
        ]);
    }
}
