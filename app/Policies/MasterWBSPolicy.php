<?php

namespace App\Policies;

use App\Models\User;
use App\Models\MasterWBS;
use Illuminate\Auth\Access\HandlesAuthorization;

class MasterWBSPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view_any_master::w::b::s');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, MasterWBS $masterWBS): bool
    {
        return $user->can('view_master::w::b::s');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create_master::w::b::s');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, MasterWBS $masterWBS): bool
    {
        return $user->can('update_master::w::b::s');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, MasterWBS $masterWBS): bool
    {
        return $user->can('delete_master::w::b::s');
    }

    /**
     * Determine whether the user can bulk delete.
     */
    public function deleteAny(User $user): bool
    {
        return $user->can('delete_any_master::w::b::s');
    }

    /**
     * Determine whether the user can permanently delete.
     */
    public function forceDelete(User $user, MasterWBS $masterWBS): bool
    {
        return $user->can('force_delete_master::w::b::s');
    }

    /**
     * Determine whether the user can permanently bulk delete.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->can('force_delete_any_master::w::b::s');
    }

    /**
     * Determine whether the user can restore.
     */
    public function restore(User $user, MasterWBS $masterWBS): bool
    {
        return $user->can('restore_master::w::b::s');
    }

    /**
     * Determine whether the user can bulk restore.
     */
    public function restoreAny(User $user): bool
    {
        return $user->can('restore_any_master::w::b::s');
    }

    /**
     * Determine whether the user can replicate.
     */
    public function replicate(User $user, MasterWBS $masterWBS): bool
    {
        return $user->can('replicate_master::w::b::s');
    }

    /**
     * Determine whether the user can reorder.
     */
    public function reorder(User $user): bool
    {
        return $user->can('reorder_master::w::b::s');
    }
}
