<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Hash;
use App\Helper\ResponseHelper;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{

    /**
     * Register new user.
     * @param RegisterRequest $request)
     *
     */
    public function register(RegisterRequest $request)
    {
        try {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
            if ($user) {
                return ResponseHelper::success(message: 'user has been registered Successfully!', data: $user, statusCode: 201);
            }
            return ResponseHelper::error(message: 'Unable to register user!', statusCode: 400);
        } catch (Exception $e) {
            \Log::error('unable to Register User:' . $e->getMessage() . '- Line no. ' . $e->getLine());
            return ResponseHelper::error(message: 'Unable to register user!', statusCode: 400);
        }
    }

    /**
     * Login user
     * @param LoginRequest $request
     */
    public function login(LoginRequest $request)
    {
        try {
            //if credentials are incorrect
            if (!Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                return ResponseHelper::error(message: 'Unable to login user, Invalid Credentials!', statusCode: 400);
            }

            $user = Auth::user();

            //create Api token
            $token = $user->createToken('My api Token')->plainTextToken;
            $authuser = [
                'user' => $user,
                'token' => $token
            ];
            return ResponseHelper::success(message: 'user has been login Successfully!', data: $authuser, statusCode: 200);
        } catch (Exception $e) {
            \Log::error('unable to Login User:' . $e->getMessage() . '- Line no. ' . $e->getLine());
            return ResponseHelper::error(message: 'Unable to login user!' . $e->getMessage(), statusCode: 500);
        }
    }

    /**
     * auth user data /profile data
     *
     */

    public function userProfile()
    {
        try {
            $user = Auth::user();
            if ($user) {
                return ResponseHelper::success(message: 'user profile fetched ', data: $user, statusCode: 200);
            }
            return ResponseHelper::error(message: 'Unable to fetch data due to invalid token !', statusCode: 400);
        } catch (Exception $e) {
            \Log::error('unable to Fetch Data:' . $e->getMessage() . '- Line no. ' . $e->getLine());
            return ResponseHelper::error(message: 'Unable to fetch data user!', statusCode: 400);
        }
    }

    /**
     * auth user Logout
     *
     */
    public function userLogout()
    {
        try {
            $user = Auth::user();
            if ($user) {
                $user->currentAccessToken()->delete();
                return ResponseHelper::success(message: 'user Logout sucessfully ', data: $user, statusCode: 200);
            }
            return ResponseHelper::error(message: 'Unable to logout due to invalid token !', statusCode: 400);
        } catch (Exception $e) {
            \Log::error('unable to logout:' . $e->getMessage() . '- Line no. ' . $e->getLine());
            return ResponseHelper::error(message: 'Unable to logout user!', statusCode: 400);
        }
    }

    public function SentResentLinkEmail(){
        
    }
}
