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

    public function store(Request $Resquest)
    {

        $messages = auth()->user()->messages()->create([
                   'body' => $Resquest->body

        ]);

       return response()->json($message, 201);
    }

}
