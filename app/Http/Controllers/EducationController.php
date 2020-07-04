<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Education;

class EducationController extends Controller
{

    public function __construct()
    {
        $this->middleware("auth");
    }

    public function create(User $user)
    {
        $educations = Education::where('user_id', '=', $user->id)->orderBy('updated_at', 'DESC')->get();
        $this->authorize('view', $user);
        return view('employee.education', compact('user', 'educations'));
    }

    public function store()
    {
        $data=request()->validate([
            "profession"=>"required",
            "institution"=>"required",
            "period"=>"required",
            "isfinished"=>"required",
        ]);

        auth()->user()->educations()->create($data);

        return redirect("employee/" . auth()->user()->id . "/createeducation");
    }

    public function destroy($education)
    {
        $educations = Education::where('user_id', '=', auth()->user()->id);
        $educations = $educations->find($education);
        $educations->delete();
        return redirect("employee/" . auth()->user()->id . "/createeducation");
    }

    public function edit(Education $education)
    {
        $user = User::findorFail($education->user_id);
        $this->authorize('update', $user);

        return view('employee.editeducation', compact('education', 'user'));
    }

    public function update($education)
    {
        $educations = Education::where('id', '=', $education);
        $data = request()->validate([
            'profession'=>'required',
            "institution"=>"required",
            "period"=>"required",
            "isfinished"=>"",
            ]);
            
        $educations->update($data);
        

        return redirect("employee/" . auth()->user()->id . "/createeducation");

    }
}
