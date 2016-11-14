<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Chat;

class ChatController extends Controller
{
    public function getUserConversation(Request $request){
        $userId = $request->input('id');
        $authUserId = $request->user()->id;
        $chats = Chat::whereIn('sender_id', [$userId, $authUserId])
            ->whereIn('receiver_id',[$userId, $authUserId])
            ->orderBy('created_at', 'asc')
            ->get();
        
        return response(['data' => $chats], 200); 
    }
}
