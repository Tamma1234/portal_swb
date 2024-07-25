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
    public $data;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($data)
    {
//      $this->question = $question;
//      $this->user_id = $user_id;
      $this->data = $data;
    }

    /**
     * @return Channel
     */
    public function broadcastOn()
    {
//        return new Channel('student-channel');
        return new PrivateChannel('my-channel'.$this->data['user_id']);
    }

    /**
     * @return string
     */
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
