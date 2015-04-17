<?php namespace App\Repositories\Interfaces;

interface MessageRepositoryInterface {

    public function all();

    public function find($id);

    public function delete($id);

    public function create($receiver_username, $attributes);

    public function update($attributes);

    public function getUnread();

    public function getSender($message_id);

    public function getReceiver($message_id);

    public function getAlert();
}