<?php

namespace App\Listeners;

use App\Events\EventMailMesaj;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailContact;

class ListenerMailMesaj
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
     * @param  EventMailMesaj  $event
     * @return void
     */
    public function handle(EventMailMesaj $event)
    {
        //
       Mail::to($event->mesaj->email)->send(new EmailContact($event->mesaj));
    }
}
