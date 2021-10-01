<?php

namespace App\Listeners;

use App\Models\User;
use App\Events\OrderCreate;
use App\Notifications\OrderNotification;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Notification;

class SendOrderNotifications
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
     * @param  OrderCreate  $event
     * @return void
     */
    public function handle(OrderCreate $event)
    {
        $user = User::where('role_id', '=', 1)->get();
        Notification::send($user, new OrderNotification($event->order));
    }
}
