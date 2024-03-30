<?php

namespace App\Livewire;

use App\Models\Reply;
use App\Models\Thread;
use Livewire\Component;
use Livewire\Attributes\Validate;

class ShowThread extends Component
{
    public Thread $thread;

    #[Validate('required')]
    public $body = "";



    public function postReply()
    {
        //validate
        $this->validate();

        //create reply
        auth()->user()->replies()->create(
            [
                'body' => $this->body,
                'thread_id' => $this->thread->id,
            ]
        );




        $this->body = "";

    }
    public function render()
    {

        return view(
            'livewire.show-thread',
            [
                "replies" => $this->thread
                    ->replies()
                    ->whereNull("reply_id")
                    ->get()
            ]
        );
    }
}
