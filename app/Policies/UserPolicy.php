<?php

namespace App\Policies;

use App\Model\admin\admin;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the admin can view the post.
     *
     * @param  \App\admin  $user
     * @param  \App\Post  $post
     * @return mixed
     */
    public function view(admin $user)
    {
        //
    }

    /**
     * Determine whether the admin can create posts.
     *
     * @param  \App\admin  $user
     * @return mixed
     */
    public function create(admin $user)
    {
        return $this->getPermission($user,1);
    }

    /**
     * Determine whether the admin can update the post.
     *
     * @param  \App\admin  $user
     * @param  \App\Post  $post
     * @return mixed
     */
    public function update(admin $user)
    {
        return $this->getPermission($user,3);
    }

    /**
     * Determine whether the admin can delete the post.
     *
     * @param  \App\admin  $user
     * @param  \App\Post  $post
     * @return mixed
     */
    public function delete(admin $user)
    {
        return $this->getPermission($user,4);
    }

    public function permission(admin $user)
    {
        return $this->getPermission($user,11);
    }

    public function role(admin $user)
    {
        return $this->getPermission($user,12);
    }

    protected function getPermission($user,$p_id)
    {
        foreach ($user->roles as $role) {
            foreach ($role->permissions as $permission) {
                if ($permission->id == $p_id) {
                    return true;
                }
            }
        }
        return false;
    }
}
