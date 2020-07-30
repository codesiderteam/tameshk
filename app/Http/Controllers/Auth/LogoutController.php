<?php

namespace App\Http\Controllers\Auth;

use App\Contracts\Repositories\UserRepositoryContract;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    /**
     * @var $userRepository
     */
    private UserRepositoryContract $userRepository;

    public function __construct(UserRepositoryContract $userRepository)
    {
        $this->middleware("auth:sanctum");
        $this->userRepository = $userRepository;
    }

    /**
     * Delete All User Tokens
     *
     * @param Illuminate\Http\Request $request
     * @return void
     */
    public function __invoke(Request $request)
    {
        $user = $request->user();

        return $user->tokens()->delete();
    }
}
