<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Http\Request;
use Illuminate\Queue\SerializesModels;

class HelloPusherEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $question;
    public $user_id;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($question)
    {
      $this->question = $question;
    }

    /**
     * @return Channel
     */
    public function broadcastOn()
    {
//        return new Channel('student-channel');
        return new Channel("student-channel");
    }

    public function broadcastAs()
    {
        return 'my-event';
    }
//    public function broadcastWith()
//    {
//        return [
//            'question' => $this->question,
//            'user_id' => $this->user_id
//        ];
//    }
}
