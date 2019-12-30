<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Auth;

class Chat extends Model
{
    public $table = 'chat';
    public $timestamps = false;

    public function saveMessage($data) {
        $this->sender_id = $data->sender_id;
        $this->receiver_id = $data->receiver_id;
        $this->message = $data->message;
        $this->send_at = date('Y-m-d H:i:s');
        $this->save();

        return true;
    }

    public static function getChatMessages() {
        return DB::table('chat')->where('sender_id', Auth::user()->id)->orWhere('receiver_id', Auth::user()->id)->get();
    }

}
