<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
* Show the application dashboard.
*
* @return \Illuminate\Contracts\Support\Renderable
*/

class ChatController extends Controller
{
    public function index()
    {
    return view('chat.index');
    }

}
