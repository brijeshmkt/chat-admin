<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Blockip;
use Auth;
use Redirect;

class IpController extends Controller
{
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $ips = Blockip::all();

        $data = [
            'ips' => $ips
        ];

        return view('ip.index', $data);
    }

    public function block(Request $request) {

        $ip = New Blockip;
        $ip->ip = $request->ip;
        $ip->user_id = Auth::user()->id;
        $ip->save();

        return Redirect::back();
    }

   
}
