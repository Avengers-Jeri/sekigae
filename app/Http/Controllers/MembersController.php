<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Member;

use App\User;

class MembersController extends Controller
{
     
     public function create()
    {
        $member = new Member;

        return view('members.create', [
            'member' => $member,
            ]);
    }
     
     
     public function store(Request $request)
    {
        $this->validate($request, [
            'member_name' => 'required|max:191',
        ]);

        $request->user()->members()->create([
            'member_name' => $request->member_name,
        ]);

        return redirect()->back();
    }
    
    public function destroy($id)
    {
        $member = \App\Member::find($id);

        if (\Auth::id() === $member->user_id) {
            $member->delete();
        }

        return redirect()->back();
    }
    
    
}
