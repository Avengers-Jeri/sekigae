<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\User;

class UsersController extends Controller
{

<<<<<<< HEAD
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
=======
 public function show()
 
    {
        $data = [];
        if (\Auth::check()) {
            $user = \Auth::user();
            $members = $user->members()->get()->shuffle();

            $data = [
                'user' => $user,
                'members' => $members,
            ];
            
            return view('users.show', $data);
        }else {
            return view('welcome');
>>>>>>> 7c946cb9c61c2503ef345893b5b21bcc57e303d4
        }
    // public function shuffle()
    // {
    //     //
    // }
}
