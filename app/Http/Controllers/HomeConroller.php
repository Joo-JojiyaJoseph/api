<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeConroller extends Controller
{

    public function loginuser()
    {

 //---------------------------------------


        // get data from api

        // $response = Http::get('https://jsonplaceholder.typicode.com/users/');
        // if ($response->successful()) {
        //    $employess= $response->json();
        //     return view('employee', ['employees' =>$employess]);
        // }
        //  else {
        //     return response()->json(['message' => 'Failed to fetch employees'], 500);
        // }

//---------------------------------------------------



        // $response = Http::withHeaders([
        //     'Content-Type' => 'application/json',
        //     'Authorization' => 'Bearer your-token', // Example header
        // ])->post('https://dummyjson.com/auth/login', [
        //     'username' =>'emilys',
        //     'password' => 'emilyspass',
        //     'expiresInMins' =>'30',
        // ]);


//--------------------------------------------------------------

        // login user and get token

        // $response = Http::
        // withHeaders([  'Content-Type' => 'application/json',])
        // ->post('https://dummyjson.com/auth/login', [
        //     'username' => 'emilys',
        //     'password' => 'emilyspass',
        //     'expiresInMins' => '30',
        // ]);

        // $result = $response->json();
        // dd($result );





//----------------------------------------------


    }
}
