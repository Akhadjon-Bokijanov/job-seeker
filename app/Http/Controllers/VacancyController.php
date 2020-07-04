<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vacancy;

class VacancyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function create()
    {
        return view('employer.addvacancy');
    }

    public function store()
    {
        
        $data = request()->validate([
            'position'=>"required",
            'minsalary'=>"required",
            "maxsalary"=>"required",
            "time"=>"required",
            "type"=>"required", 
            "number"=>'required',
            "location"=>"required",
            "description"=>"required",
            "requirement"=>"required",
            ]);
        
        auth()->user()->vacancies()->create($data);

        return redirect('/employer');
            
    }

    public function index()
    {
        $vacancies = Vacancy::where('user_id','=', auth()->user()->id)->orderBy('created_at', 'DESC')->get();

        //dd($vacancies);

        return view('employer.viewvacancy', compact('vacancies'));
    }

    public function destroy($vacancy)
    {
        $vacancies = Vacancy::where('user_id', '=', auth()->user()->id);
        $vacancies = $vacancies->findorFail($vacancy);
        $vacancies->delete();

        return redirect('/employer/viewvacancies');
    }
}
