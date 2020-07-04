<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Work;

class WorkExperienceController extends Controller
{

    public function __construct()
    {
        $this->middleware("auth");
    }

    public function create(User $user)
    {
        $this->authorize('view', $user);
        $works = Work::where('user_id','=', $user->id)->orderBy('updated_at', "DESC")->get();
        return view('employee.working', compact('user', 'works'));
    }

    public function store()
    {
        $data = request()->validate([
            "company" => 'required',
            "position" => "required", 
            "industry" => "required",
            "period" => "required",
            "website" => "",
        ]);
        
        auth()->user()->works()->create($data);

        return redirect("employee/" . auth()->user()->id . "/createexperience");
    }

    public function destroy($work)
    {
        $works = Work::where('user_id', '=', auth()->user()->id);
        $works = $works->find($work);
        $works->delete();
        return redirect("employee/" . auth()->user()->id . "/createexperience");
    }

    public function edit(Work $work)
    {
        $this->authorize('update', $work);
        return view('employee.editwork', compact('work'));
    }

    public function update($work)
    {
        $works = auth()->user()->works()->findorFail($work);

        $data = request()->validate([
            "company" => 'required',
            "position" => "required",
            "industry" => "required",
            "period" => "required",
            "website" => "",
        ]);

        $works->update($data);

        return redirect("employee/" . auth()->user()->id . "/createexperience");
    }
}
