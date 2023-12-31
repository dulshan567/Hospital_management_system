<?php

namespace App\Events;

use App\Models\Message;
use App\Models\User;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class SendMessage implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $username='';
    public $message='';
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($username ,$message)
    {
        $this->message=$message;
        $this->username=$username;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel('laravelchat');
    }
    public function broadcastAs()
    {
        return 'chatting';
    }
}

