<?php

namespace App\Livewire;

use App\Models\Reply;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ShowReply extends Component
{
    public Reply $reply;

    #[Validate('required')]
    public $body = "";

    public $isCreating = false;
    public $isEditing = false;


    public function updatedIsCreating()
    {
        $this->body = "";
        $this->isEditing = false;

    }

    public function updatedIsEditing()
    {
        $this->body = $this->reply->body;
        $this->isCreating = false;
    }
    public function editReply()
    {
        $this->validate();
        if (auth()->user()->cannot("update", $this->reply)) {
            abort(403);
        }

        //create reply
        $this->reply->update(["body" => $this->body]);

        $this->body = "";
        $this->isCreating = false;
        $this->isEditing = false;


    }

    public function postChild()
    {
        //validate
        $this->validate();

        //create reply
        auth()->user()->replies()->create(
            [
                'body' => $this->body,
                'thread_id' => $this->reply->thread->id,
                "reply_id" => $this->reply->id
            ]
        );

        $this->body = "";
        $this->isCreating = false;

    }

    public function render()
    {
        return view('livewire.show-reply');
    }
}
