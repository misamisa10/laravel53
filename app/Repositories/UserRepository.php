<?php

namespace App\Repositories;

use App\DataAccess\Fluent\User;

class UserRepository implements UserRepositoryInterface
{
    public $user;
    
    public function __construct(User $user) {
        $this->user = $user;
    }

    public function getList() {
        return $this->user->findAll();
    }
}