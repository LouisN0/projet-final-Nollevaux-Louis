<?php

namespace App\Policies;

use App\Models\Cour;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CourPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        return in_array($user->role_id, [1, 2]);
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Cour  $cour
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Cour $cour)
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return in_array($user->role_id, [1, 2]);
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Cour  $cour
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Cour $cour)
    {
        if($user->teacher->id == $cour->teacher->id || $user->role_id == 1){
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Cour  $cour
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Cour $cour)
    {
        if($user->teacher->id == $cour->teacher->id || $user->role_id == 1){
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Cour  $cour
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Cour $cour)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Cour  $cour
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Cour $cour)
    {
        //
    }
}
