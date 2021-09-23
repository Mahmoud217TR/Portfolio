<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\Redirect;

class MessageController extends Controller
{
    //
    public function create(){
        $data = request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'message' => ['required', 'string', 'max:500'],
        ]);

        return redirect(route('message.thanks'));
    }

    public function thanks(){
        return view('contacts.thanks');
    }
}
