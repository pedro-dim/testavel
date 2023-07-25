<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use GuzzleHttp\Psr7\Response;
use App\Http\Requests\AddUserRequest;


class UserController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        //
    }



    public function getUsers()
    {
        $users = User::all();


        return response()->json($users);
    }

    public function store(AddUserRequest $request)
    {



        // dd($request->toArray());
        $request->validated();
        $newUser = new User();
        $newUser->name = $request->name;
        $newUser->email = $request->email;
        $newUser->password = $request->password;
        $newUser->save();
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
