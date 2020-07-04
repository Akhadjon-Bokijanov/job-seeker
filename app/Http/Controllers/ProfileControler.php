<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Auth\Middleware\Authorize;

class ProfileControler extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index($user)
    {   
        $user = User::findorFail($user);
        $this->authorize('view', $user);
        // dd($user->personal);
        

        return view('employee.profile', ['user' => $user]);
    }

    public function edit(User $user)
    {
        $this->authorize('update', $user);
        return view('employee.personalinfo', compact('user'));
    }
 
    public function update(User $user)
    {
        $data = request()->validate([
            'dob'=>"required",
            'gender'=>"",
            'street'=>"",
            'nation'=>"",
            'residence'=>"",
            'phone'=>"",
            'description'=>"",
        ]);

        $user->personal->update($data);

        return redirect("/employee/{$user->id}/profile");
    }
}
