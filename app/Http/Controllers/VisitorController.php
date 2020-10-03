<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Message;
use App\Visitor;

class VisitorController extends Controller
{

    public function updateStatusById($id) {
        $visitor = Visitor::find($id);
        $visitor->status = 0;
        $visitor->save();

        return "success";
    }

    public function store(Request $request ) {

        // return $request->ipdata['city'];
        
        $visitor = New Visitor;
        $visitor->user_id = $request->user_id;
        $visitor->name = $request->name;
        $visitor->status = 1;
        $visitor->uniqueId = $request->uniqueId;

        $visitor->city = $request->ipdata['city'];
        $visitor->country_name = $request->ipdata['country_name'];
        $visitor->ip = $request->ipdata['ip'];
        $visitor->region = $request->ipdata['region'];
        $visitor->timezone = $request->ipdata['timezone'];





            
        $visitor->save();



        return $visitor;

        // // return $request->msgTxt;

        // $message = New Message;
        // $message->user_id = 2;
        // $message->visitor_id = 1;
        // $message->msg = $request->msgTxt;
       



        // $message->save();

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
