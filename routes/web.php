<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//use Illuminate\Routing\Route;

//use Illuminate\Routing\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//User Routes

Route::get('/employee', 'UserController@index')->name('employee.index');

Route::get('/employee/{user}/viewprofile', 'UserController@show')->name('employee.show');


//Profile Routes

Route::get('/employee/{user}/profile', 'ProfileControler@index')->name('profile.show');

Route::get('/employee/{user}/editpersonalinfo', 'ProfileControler@edit')->name('employee.edit');

Route::patch('/employee/{user}/profile', 'ProfileControler@update')->name('employee.update');

//Prefereences

Route::get('/employee/{user}/editpreferences', 'PreferencesControler@edit')->name('preference.edit');

Route::patch('/employee/{user}/editpreference', 'PreferencesControler@update')->name('preference.update');

//Skills

Route::get('/employee/{user}/editskills', 'SkillsController@edit')->name('skills.edit');

Route::patch('/employee/{user}/updateskills', 'SkillsController@update')->name('skills.update');

//Work experience

Route::get('/employee/{user}/createexperience', 'WorkExperienceController@create')->name('work.create');

Route::post('/employee/work/store', 'WorkExperienceController@store');

Route::post('/deletework/{work}', 'WorkExperienceController@destroy');

Route::get('/employee/{work}/updatework', 'WorkExperienceController@edit')->name('work.edit');

Route::patch('/employee/{work}/updateexperience', 'WorkExperienceController@update')->name('work.update');


//Education and tranings

Route::get('/employee/{user}/createeducation', 'EducationController@create')->name('education.create');

Route::post('/employee/education/store', 'EducationController@store');

Route::post('/deleteeducation/{education}', 'EducationController@destroy');

Route::get('/employee/{education}/editeducation', 'EducationController@edit')->name('education.edit');

Route::patch('/employee/{education}/update', 'EducationController@update')->name('education.update');

//Awards

Route::get('/employee/{user}/createawards', 'AwardController@create')->name('award.create');

Route::post('/employee/awards/store', 'AwardController@store');

Route::post('/deleteaward/{award}', 'AwardController@destroy')->name('award.destroy');

Route::get('/employee/{award}/editaward', 'AwardController@edit')->name('award.edit');

Route::patch('/employee/award/{award}/update', 'AwardController@update')->name('award.update');

//------------------------EMPLOYERS ROUTES ----------------------

//MAIN PROFILE PAGE

//this below just for catch attention
// Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta aperiam obcaecati aut quas beatae ipsa voluptatem 
//incidunt iusto saepe, quis alias iste fugiat autem animi vitae quia similique reiciendis? Voluptates!

Route::get('/employer', 'EmployerProfileController@index')->name('employer.index');


//Vacancy

Route::get('employer/addvacancy', 'VacancyController@create')->name('vacancy.create');

Route::post('/employer/newvacancy', 'VacancyController@store');

Route::get('/employer/viewvacancies', 'VacancyController@index')->name('vacancy.index');

Route::delete('/employer/vacancies/{vacancy}', 'VacancyController@destroy')->name('vacancy.destroy');




