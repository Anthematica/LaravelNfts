<?php

namespace App\Events;

use App\Models\Nft;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class LikeToggle implements ShouldBroadcastNow
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

  
    public function __construct(public Nft $nft)
    {
        $nft->loadCount('likes');
    }

    public function broadcastOn()
    {
        return new Channel('likes');
    }
}
