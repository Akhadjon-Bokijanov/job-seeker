<?php

namespace App\Policies;

use App\User;
use App\Awards;
use Illuminate\Auth\Access\HandlesAuthorization;

class AwardsPolicy
{
    use HandlesAuthorization;
    
    /**
     * Determine whether the user can view any awards.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the awards.
     *
     * @param  \App\User  $user
     * @param  \App\Awards  $awards
     * @return mixed
     */
    public function view(User $user, Awards $awards)
    {
        //
    }

    /**
     * Determine whether the user can create awards.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the awards.
     *
     * @param  \App\User  $user
     * @param  \App\Awards  $awards
     * @return mixed
     */
    public function update(User $user, Awards $awards)
    {
        return $user->id == $awards->user_id;
    }

    /**
     * Determine whether the user can delete the awards.
     *
     * @param  \App\User  $user
     * @param  \App\Awards  $awards
     * @return mixed
     */
    public function delete(User $user, Awards $awards)
    {
        //
    }

    /**
     * Determine whether the user can restore the awards.
     *
     * @param  \App\User  $user
     * @param  \App\Awards  $awards
     * @return mixed
     */
    public function restore(User $user, Awards $awards)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the awards.
     *
     * @param  \App\User  $user
     * @param  \App\Awards  $awards
     * @return mixed
     */
    public function forceDelete(User $user, Awards $awards)
    {
        //
    }
}
