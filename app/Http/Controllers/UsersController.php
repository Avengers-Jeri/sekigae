<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\User;

class UsersController extends Controller
{

     public function show()
     
        {
            $data = [];
            if (\Auth::check()) {
                $user = \Auth::user();
                $members = $user->members()->get();
                $shufle_members = shuffle($members);
                $data = [
                    'user' => $user,
                    'members' => $shufle_members,
                ];
                
                return view('users.show', $data);
            }else {
                return view('welcome');
            }
        }
    // public function shuffle()
    // {
    //     //
    // }
}

