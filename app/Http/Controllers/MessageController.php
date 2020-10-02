<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Message;

class MessageController extends Controller
{


    public function store(Request $request ) {
        

        // return $request->msgTxt;

        $message = New Message;
        $message->user_id = 2;
        $message->visitor_id = 1;
        $message->msg = $request->msgTxt;
       



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
    public function index()
    {
        return view('home');
    }
}
