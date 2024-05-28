<?php
/*
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Events.MessageSent;
use App\Events.SendMessageEvent;
use App\Http\Requests.SendMessageRequest;
use App\Models\Chat;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChatController extends Controller
{
    public function SendMessage(SendMessageRequest $request)
    {
        if ($request->to == auth("sanctum")->user()->name){
            return response()->json(['message' => "You cannot send message to yourself"]);
        }

        $OtherUserId = User::where("name",$request->to)->first()->id;
        $collection = $this->IsTherePreviousChat($OtherUserId,auth("sanctum")->user()->id);

        if ($collection == false) {
            $chat = Chat::create([
                'user_id' => auth("sanctum")->user()->id
            ]);
        }
        $message = Message::create([
            'from_user' => auth("sanctum")->user()->id,
            'to_user'   => $OtherUserId,
            'content'   => $request->message ,
            'chat_id'   => $collection == false? $chat->id:$collection[0]->chat_id,
        ]);

        broadcast(new SendMessageEvent($message->toArray()))->toOthers();
    }
}*/
