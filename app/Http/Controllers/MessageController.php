<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Message;
use App\Visitor;
use Auth;

class MessageController extends Controller
{

    public function index() {
        // die('hi');
        return view('Admin.chatmessages.index');
    }

    public function activeVisitorsChat($id) {
        // die($id);
        $data = [
            'id' => $id
        ];
        return view('Admin.chatmessages.active-visitors-chat', $data);
    }



    
    // Ajax Call
    public function getMessageById($id) {
        
        $messages = Message::where('visitor_id', '=', $id)->get();

        $data = [
            'messages' => $messages
        ];

        return view('Admin.chatmessages.ajax-msg', $data);
    }



    //Ajax call
    public function activeVisitors() {
        $visitors = Visitor::where('status' ,'=', 1)
                        ->where('user_id' ,'=', Auth::user()->id)
                        ->orderBy('id', 'DESC')
                        ->get();
        
        
        $data = [
            'visitors' => $visitors
        ];

        // return view('greeting', ['name' => 'James']);
        return view('Admin.chatmessages.active_visitors', $data);
    }


    public function store(Request $request ) {
        

        // return $request->msgTxt;
        // 
        if(!$request->user_id) {
            $user_id = Auth::user()->id;
        }else{
           $user_id = $request->user_id; 
        }

        $message = New Message;
        $message->user_id = $user_id;
        $message->visitor_id = $request->visitor_id;
        $message->owner = $request->owner;
        $message->msg = $request->msg;
       



        $message->save();

        // if($message->id) {
        //     return $message->id
        // }

        // // return $request;
        // return "error";

    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     return view('home');
    // }
}
