<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class SkillsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit(User $user)
    {
        $this->authorize('view', $user);
        return view('employee.skills', compact('user'));
    }

    public function update(User $user)
    {
        $data = request()->validate([
            'designing'=>"",
            'web'=>"",
            'desktop'=>"",
            'mobile'=>"",
            'machine'=>"",
            'uzbek'=>"",
            'english'=>"",
            'russian'=>"",
            'spanish'=>"",
            'german'=>"",
            'leadership'=>"",
            'critical'=>"",
            'strategy'=>"",
            'project'=>"",
            'management'=>"",
            'communication'=>"",
            'entrepreneur'=>"",
            'marketing'=>"",
            'driving'=>"",
            'hardware'=>"",
        ]);

        $user->skills->update($data);

        return redirect("/employee/{$user->id}/profile");
    }
} 
