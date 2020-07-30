<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRequest;
use App\Contracts\Repositories\UserRepositoryContract;

class AuthenticateController extends Controller
{
    private $userRepository;

    protected function __construct(UserRepositoryContract $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * check in database user is exist
     *
     * @param array $data
     * @return array $user
     */
    public function handleUserAuth(string $mobile)
    {
        return $this->userRepository->registerOrLogin($mobile);
    }

    /**
     * User Authenticate in mobile application
     * both register and login handle here with
     * Strategy pattern
     *
     * @param Request $request
     * @return array
     */
    public function __invoke(AuthRequest $request)
    {
        // Send Sms First call event

        // check user
        $data = $this->handleUserAuth($request->mobile);

        return response()->json($data, 200);
    }
}
