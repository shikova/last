<?php

namespace App\Http\Controllers;

use App\City;
use App\Speciality;
use App\User;
use Cornford\Googlmapper\Facades\MapperFacade as Mapper;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.profile');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($username)
    {
        Mapper::map(53.381128999999990000, -1.470085000000040000);
        $user= User::where('username','=',$username)->first();
        return view('user.public')->withUser($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        Mapper::map(53.381128999999990000, -1.470085000000040000,['draggable' => true]);
        $ville=City::all();
        return view('user.edit')->withVille($ville);

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
        //Validate the data
        $this->validate($request,array(
            'name' => 'required|string|max:255',
//          'email' => 'required|string|email|max:255|unique:users',
//          'password' => 'required|string|min:6|confirmed',
        ));
        //save the data to the database
        $user=User::find($id);
        $user->name=$request->input('name');
        $user->email=$request->input('email');
        $user->save();
        //set flash data with success message
        //redirect with flash data to user.show
        return redirect()->route('user.show',$user->id);
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
}
