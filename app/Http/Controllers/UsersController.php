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

            $data = [
                'user' => $user,
                'members' => $members,
            ];
            
            return view('users.show', $data);
        }else {
            return view('welcome');
        }
    }
    
    public function result()
    {
        $data = [];
        if (\Auth::check()) {
            $user = \Auth::user();
            $members = $user->members()->get()->shuffle();

            $data = [
                'user' => $user,
                'members' => $members,
            ];
            
            return view('users.results', $data);
        }else {
            return view('welcome');
        }
    }
    
    public function destroy($id)
    {
        $user = Auth::user();
        $user->delete();

        return redirect('/');
    }
}
