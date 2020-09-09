<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use  App\User;

class UserController extends Controller {

    /**
     * Get the authenticated User.
     *
     * @return Response
     */
    public function profile() {
        return response()->json(['user' => Auth::user()], 200);
    }

    /**
     * Get all User.
     *
     * @return Response
     */
    public function allUsers() {
        return response()->json(['users' => User::all()], 200);
    }

    public function delete($id) {
        $model = User::whereId($id);
        if ($model !== null) {
            $model->delete();
            return response()->json([
                'message' => 'Delete complete',
            ], 200);
        }
        return response()->json([
            'message' => 'Something error',
        ], 200);
    }

    /**
     * Get one user.
     *
     * @return Response
     */
    public function singleUser($id) {
        try {
            $user = User::findOrFail($id);
            return response()->json(['user' => $user], 200);
        } catch (\Exception $e) {

            return response()->json(['message' => 'user not found!'], 404);
        }
    }
}

