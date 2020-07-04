<?php

namespace App;

use Faker\Provider\ar_JO\Person;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 'lastname', 'email', 'password', 'user_role',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    protected static function boot()
    {
        parent::boot();

        static::created(function($user){
        
        if($user->user_role == 'employee')
            {
                $user->personal()->create();
                $user->preference()->create();
                $user->skills()->create();
            }
        });
    }

    public function personal()
    {   
        return $this->hasOne(Personal::class);
    }

    public function preference()
    {
        return $this->hasOne(Preference::class);
    }

    public function skills()
    {
        return $this->hasOne(Skills::class);
    }

    public function works()
    {
        return $this->hasMany(Work::class);
    }

    public function educations()
    {
        return $this->hasMany(Education::class);
    }
    
    public function awards()
    {
        return $this->hasMany(Awards::class);
    }

    public function vacancies()
    {
        return $this->hasMany(Vacancy::class);
    }
}
