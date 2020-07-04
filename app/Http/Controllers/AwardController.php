<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Awards;

class AwardController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }

    public function create(User $user)
    {
        $this->authorize('view', $user);
        $awards = Awards::where('user_id', "=", auth()->user()->id)->orderBy('updated_at', "DESC")->get();

        return view('employee.awards', compact('user', 'awards'));
    }

    public function store()
    {
        $data = request()->validate([
            'nomination' => "required",
            "date" => "required",
            "provider" => "required",
            "summary" => 'required',
        ]);

        auth()->user()->awards()->create($data);

        return redirect("employee/" . auth()->user()->id . "/createawards");
    }

    public function destroy($award)
    {
        $target = auth()->user()->awards()->findorFail($award);

        $target->delete();

        return redirect("employee/" . auth()->user()->id . "/createawards");
    }

    public function edit(Awards $award)
    {
        $this->authorize('update', $award);
        return view('employee.editaward', compact('award'));
    }

    public function update($award)
    {
        $target = auth()->user()->awards()->findorFail($award);

        $data = request()->validate([
            'nomination' => "required",
            "date" => "required",
            "provider" => "required",
            "summary" => 'required',
        ]);

        $target->update($data);

        return redirect("employee/" . auth()->user()->id . "/createawards");
    }
}
