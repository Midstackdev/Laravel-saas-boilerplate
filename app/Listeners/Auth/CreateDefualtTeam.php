<?php

namespace App\Listeners\Auth;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class CreateDefualtTeam
{

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $event->user->team()->create([
            'name' => $event->user->name
        ]);
    }
}
