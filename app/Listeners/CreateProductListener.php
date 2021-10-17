<?php

namespace App\Listeners;

use App\Events\CreateProductEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Alert;

class CreateProductListener
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
     * @param  CreateProductEvent  $event
     * @return void
     */
    public function handle(CreateProductEvent $event)
    {
        Alert::success('Success!', 'New Product Successfully Added..');
    }
}
