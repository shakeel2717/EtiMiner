<?php

namespace App\Http\Livewire;

use App\Models\Coin;
use App\Models\Plan;
use Livewire\Component;

class Calculator extends Component
{

    public $crypto;
    public $total;
    public $profit;
    public $usd = 1;
    public $days = 120;
    public $dayWiseProfit;


    protected $rules = [
        'usd' => 'required|numeric|min:1|max:1000000',
        'crypto' => 'required|numeric|max:1000000000',
        'days' => 'required|numeric|min:1',
    ];

    public function mount()
    {
        // getting live rate
        $coin = Coin::find(1);

        $this->crypto = $this->usd / $coin->price;
        $this->total = $this->usd * setting('power_price');
        // getting profit for this amount
        $plan = Plan::where('min_invest', '<=', $this->usd)->where('max_invest', '>=', $this->usd)->first();
        $this->profit = $plan->percentage;
        $this->dayWiseProfit = $this->days * ($this->usd * 3 / 100);
    }


    public function updatedUsd()
    {
        $this->validate();

        if ($this->usd > 0) {
            // getting live rate
            $coin = Coin::find(1);
            $this->crypto = $this->usd / $coin->price;
            $this->total = $this->usd * setting('power_price');
            // getting profit for this amount
            $plan = Plan::where('min_invest', '<=', $this->usd)->where('max_invest', '>=', $this->usd)->first();
            $this->profit = $plan->percentage;
            $this->dayWiseProfit = $this->days * ($this->usd * $this->profit / 100);
        } else {
            $this->crypto = 0;
        }
    }

    public function updatedCrypto()
    {
        $this->validate();

        if ($this->crypto > 0) {
            // getting live rate
            $coin = Coin::find(1);
            $this->usd = $coin->price * $this->crypto;
            $this->total = $this->usd * setting('power_price');
            // getting profit for this amount
            $plan = Plan::where('min_invest', '<=', $this->usd)->where('max_invest', '>=', $this->usd)->first();
            $this->profit = $plan->percentage;
            $this->dayWiseProfit = $this->days * ($this->usd * $this->profit / 100);
        } else {
            $this->usd = 0;
        }
    }

    public function updatedDays()
    {
        $this->validate();
        $this->dayWiseProfit = $this->days * ($this->usd * $this->profit / 100);
    }

    public function render()
    {
        return view('livewire.calculator');
    }
}
