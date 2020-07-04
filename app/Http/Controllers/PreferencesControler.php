<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class PreferencesControler extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit(User $user)
    {
        $this->authorize('view', $user);
        return view('employee.preference', compact('user'));
    }

    public function update(User $user)
    {
        $data = request()->validate([
            'education'=>"",
            'marketing'=>"",
            'construction'=>"",
            'office'=>"",
            'service'=>"",
            'distance'=>"",
            'engineering'=>"",
            'development'=>"",
            'type'=>"",
            'time'=>"",
            'region'=>"",
            'salary'=>"",
        ]);

        $sample = ['education'=>null,
        'marketing'=>null,
        'construction'=>null,
        'office'=>null,
        'service'=>null,
        'distance'=>null,
        'engineering'=>null,
        'development'=>null,
        ];

        foreach($sample as $key=>$value)
        {
            if(!isset($data[$key]))
            {
                $data[$key]=$value;
            }
        }

        $user->preference->update($data);

        return redirect("/employee/{$user->id}/profile");
    }
}
