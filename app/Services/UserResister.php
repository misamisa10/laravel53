<?php

namespace App\Services;

use App\Repositories\UserRepositoryInterface;

class UserResister {

    /**
     * @var UserRepositoryInterface
     */
    protected $user;
    
    public function __construct(UserRepositoryInterface $user) {
        $this->user = $user;
    }
    
    public function getUser() {
        return $this->user->getList();
    }
    
}