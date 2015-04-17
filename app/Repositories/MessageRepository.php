<?php

namespace App\Repositories;

use App\Models\Alert;
use App\Models\Message;
use App\Models\User;
use App\Repositories\Interfaces\MessageRepositoryInterface;
use Illuminate\Auth\Guard;

class MessageRepository implements MessageRepositoryInterface {

    protected $message;
    protected $user;
    protected $auth;
    protected $alert;

    function __construct(Message $message, User $user, Guard $auth, Alert $alert)
    {
        $this->message = $message;
        $this->user = $user;
        $this->auth = $auth;
        $this->alert = $alert;
    }

    public function all()
    {
        return $this->message->all();
    }

    public function find($id)
    {

        return $this->message->find($id);
    }

    public function delete($id)
    {
        $message = $this->message->find($id);

        $result = $message->destroy($id);

        dd($result);

        return $result;
    }

    public function create($receiver_username, $attributes)
    {
        $sender = $this->auth->user();
        $receiver = $this->user->whereUsername($receiver_username);

        if ($receiver)
        {
            $message = new Message($attributes);

            $message->receiver()->associate($receiver);
            $message->sender()->associate($sender);

            $message->save(); // saves the message

            return $message;
        }
        else
            return null;

    }

    public function update($attributes)
    {
        // TODO: Implement update() method.
    }

    public function getUnread()
    {
        // TODO: Implement getUnread() method.
    }

    public function getSender($message_id)
    {
        $message = $this->message->find($message_id);

        // found
        if ($message)
        {
            return $message->sender();
        }

        return null;
    }

    public function getReceiver($message_id)
    {
        $message = $this->find($message_id);

        if ($message)
        {
            return $message->receiver();
        }

        return null;
    }

    public function getAlert()
    {
        // TODO: Implement getAlert() method.
    }
}