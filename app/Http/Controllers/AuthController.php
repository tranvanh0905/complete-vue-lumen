<?php

namespace App\Http\Controllers;

use App\User;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller {

    /**
     * @return JsonResponse
     */
    public function allUsers() {
        return response()->json(['users' => User::all()], 200);
    }

    /**
     * @param Request $request
     *
     * @return JsonResponse
     * @throws ValidationException
     */
    public function register(Request $request) {
        $this->validate($request, [
            'username'  => 'required|string',
            'email'     => 'required|string',
            'password'  => 'required',
            'full_name' => 'required|string',
        ]);
        DB::beginTransaction();
        try {
            $user            = new User();
            $user->username  = $request->input('username');
            $user->email     = $request->input('email');
            $password        = $request->input('password');
            $user->password  = app('hash')->make($password);
            $user->full_name = $request->input('full_name');
            $user->save();
            DB::commit();
            return response()->json([
                'user'    => $user,
                'message' => 'CREATED',
            ], 201);
        } catch (Exception $e) {
            DB::rollback();
            return response()->json([
                'message' => 'User registration failed !',
            ], 409);
        }
    }

    /**
     * @param Request $request
     *
     * @return JsonResponse
     * @throws ValidationException
     */
    public function login(Request $request) {
        //validate incoming request
        $this->validate($request, [
            'email'    => 'required|string',
            'password' => 'required|string',
        ]);
        $credentials = $request->only([
            'email',
            'password',
        ]);
        if (!$token = Auth::attempt($credentials)) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }
        return $this->respondWithToken($token);
    }
}
