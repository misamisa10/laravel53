<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Services\UserResister;

class UserController extends Controller
{
    protected $user;
    
    public function __construct(UserResister $user) {
        $this->user = $user;
    }

    /**
     * @param Illuminate\Http\Request;
     */
    public function showUsers() {
        $data = $this->user->getUser();
        return view('user.show', ['data' => $data]);
    }
}
