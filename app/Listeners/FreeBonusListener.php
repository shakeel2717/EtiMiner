<?php

namespace App\Listeners;

use App\Events\FreeBonusEvent;
use App\Models\Power;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class FreeBonusListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\FreeBonusEvent  $event
     * @return void
     */
    public function handle(FreeBonusEvent $event)
    {
        info("Adding Balance for this User");
        $power = new Power();
        $power->user_id = $event->user->id;
        $power->status = true;
        $power->amount = setting("free_bonus");
        $power->type = "Registration";
        $power->sum = true;
        $power->save();
        info("Added Successfully Balance for this User");
    }
}
