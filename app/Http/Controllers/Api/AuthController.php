<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::create($request->all()); 
        
            $accsessToken = $user->createToken('Api Token')->accessToken;
            return response()->json([
                'message'=> 'added user had been success',
                'status'=> 200,
                'data'=>$user ,
                'accsessToken' => $accsessToken
                ]);
        
        // return response()->json($user);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = user::findOrFail($id);
        $accsessToken = $user->createToken("Api Token")->accessToken;
        return response()->json([
            'message'=> "added product had been success",
            'status'=> 200,
            'date'=> $user,
            "access_token" => $accsessToken
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function login(Request $request) {
        // $user = User::get();
        $credential = $request->only(['email', 'password']);
        $token = Auth::attempt($credential);

   $accsessToken = auth()->user()->createToken('Api Token')->accessToken;
   return response()->json([
       "status" => 200,
       "message"=> "your credential is done",
       "token"=> $token,
       "access_token" => $accsessToken
    ]);
    }
}
