<?php

namespace App\Nova\Policies;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    public function viewAny(Admin $user)
    {
        return true;
    }

    public function view(Admin $user, User $model)
    {
        return true;
    }

    public function create(Admin $user)
    {
        return false;
    }

    public function update(Admin $user, User $model)
    {
        return false;
    }

    public function delete(Admin $user, User $model)
    {
        return false;
    }

    public function restore(Admin $user, User $model)
    {
        return false;
    }

    public function forceDelete(Admin $user, User $model)
    {
        return false;
    }

    public function attachAnyRole(Admin $user, User $model)
    {
        return false;
    }

    public function attachAnyPermission(Admin $user, User $model)
    {
        return false;
    }
}
