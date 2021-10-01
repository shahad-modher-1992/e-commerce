<?php

namespace App\Listeners;

use App\Models\User;
use App\Events\NewRegisterEvent;
use App\Notifications\NewRegister;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Notification;

class SendNewRwgister
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
     * @param  NewRegisterEvent  $event
     * @return void
     */
    public function handle(NewRegisterEvent $event)
    {
        $users = User::where('role_id', '=', 1)->get();
        Notification::send($users, new NewRegister($event->user));
    }
}
