<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chat;

class ChatController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
        $this->chatModel = new Chat();
    }

    public function saveMessage(Request $request) {
        $request->validate([
            'sender_id' => 'required',
            'receiver_id' => 'required',
            'message' => 'required|string'
        ]);

        $save = $this->chatModel->saveMessage($request);

        if($save) {
            return ["status" => "ok"];
        }

        return ["status" => "error"];
    } 
}
