<?php

namespace App\Policies;

use App\Models\Diet;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class DietPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }


}
