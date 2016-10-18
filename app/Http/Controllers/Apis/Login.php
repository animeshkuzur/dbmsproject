<?php

namespace App\Http\Controllers\Apis;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Tymon\JWTAuth\Facades\JWTAuth;

class Login extends Controller
{
    public function login(Request $request){
    	$data = $request->only('email','password');
    	try{
    		if(!$token = JWTAuth::attempt($data)){
    			return response()->json(['error' => 'invalid credentials'],401);
    		}
    	}
    	catch(JWTException $e){
    		return response()->json(['error' => 'could not generate token'],500);
    	}
    	$user = DB::table('users')->where('email',$data['email'])->limit(1)->get();

    	if($user)
    		return response()->json([$user,'token' => $token,]);
    	else
    		return response()->json(['error' => 'something went wrong.']);

    }
}
