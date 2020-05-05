<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function logout()
    {
        $user = auth()->user()->token();
        $user->revoke();
        return response()->json(['success' => "You have been successfully logged out."], 200);
    }
}
