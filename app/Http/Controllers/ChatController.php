<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chat;
use App\Events\ChatMessageSent;
use App\Http\Requests\StoreMessageRequest;
use App\Repositories\ChatRepository;

class ChatController extends Controller
{
    public function sendMessage(StoreMessageRequest $request, ChatRepository $chatRepository)
    {
        $request->validated();

        $chat = $chatRepository->store($request);

        broadcast(new ChatMessageSent($chat));

        return $this->successResponse($chat, 'Message sent successfully', 201);
    }
}
