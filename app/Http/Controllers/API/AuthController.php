<?php

namespace App\Http\Controllers\API;

use App\Helper\UserService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request) {
        $response = (new UserService($request->email, $request->password))->login($request->devicename);
        return response()->json($response);
    }
}
