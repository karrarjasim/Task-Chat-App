<?php 

namespace App\Repositories;

use App\Models\Chat;


class ChatRepository
{
    public function store($data) : Chat
    {
        $chat = Chat::create([
            'name' => $data->get('name'),
            'message' => $data->get('message'),
        ]);

        return $chat;
    }
}