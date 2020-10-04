<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Message;
use App\Visitor;
use App\Websitevisitor;
use Auth;

class VisitorController extends Controller
{
    public function activeCount() {
        $count = Websitevisitor::where('user_id', '=', Auth::user()->id)
                    ->where('status', '=', 0)
                    ->count();
        return $count;
    }
    public function insertWebVisitors(Request $request) {

        $visitor = New Websitevisitor;
        $visitor->user_id =  $request->user_id;
        $visitor->uniqueId =  $request->uniqueId;
        $visitor->page =  $request->page;
        $visitor->city =  $request->city;
        $visitor->country_name =  $request->country_name;
        $visitor->ip =  $request->ip;
        $visitor->region =  $request->region;
        $visitor->timezone =  $request->timezone;
        $visitor->save();


         return $request;
    }

    public function websiteVisitors(Request $request) {

        Websitevisitor::where('status', 1)
          ->where('user_id', Auth::user()->id)
          ->update(['status' => 0]);

        $visitors = Websitevisitor::where('user_id', '=', Auth::user()->id)->get();
        $data = [
            'visitors' => $visitors
        ];



        return view('web-visitors', $data);

        
    }

    public function chatHistory() {
        $visitors = Visitor::all();
        

        $data = [
            'visitors' => $visitors
        ];
        return view('chat-history', $data);
    }

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
        $visitor->email = $request->email;
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
