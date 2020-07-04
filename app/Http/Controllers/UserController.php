<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Work;
use Illuminate\Auth\Middleware\Authorize;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        //$this->authorizeResource(User::class, 'employee.{}.viewprofile');
    }
    //
    public function index()
    {
        $id = auth()->user()->id;
        $user = User::findorFail($id);
        if(auth()->user()->user_role == 'employee')
        {
            return view('employee.user', ['user' => $user]);
        }
    }

    public function show(User $user)
    {

        $works = Work::where('user_id','=', $user->id)->orderBy('updated_at', "DESC")->get();

        $this->authorize('view', $user);

        return view('employee.profileview', compact('user', 'works'));
    }
}
