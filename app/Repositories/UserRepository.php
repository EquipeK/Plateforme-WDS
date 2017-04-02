<?php

namespace App\Repositories;

use App\User;

class UserRepository Extends ResourceRepository
{

    public function __construct(User $user)
	{
		$this->model = $user;
	}

}