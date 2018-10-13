<?php

namespace App\Listeners;

use App\Events\PostViewEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class PostViewCount implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    private $post;
    public function __construct()
    {

    }

    /**
     * Handle the event.
     *
     * @param  PostViewEvent  $event
     * @return void
     */
    public function handle(PostViewEvent $event)
    {
      $this->post = $event->post;

      $this->post->count +=1;
      $this->post->save();
    }
}
