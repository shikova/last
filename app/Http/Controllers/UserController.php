<?php

namespace App\Http\Controllers;

use App\City;
use App\Speciality;
use App\User;
use Cornford\Googlmapper\Facades\MapperFacade as Mapper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    {   $user= User::where('username','=',$username)->first();
        $add=$user->contact->address;
        Mapper::map($add->latitude,$add->longitude);
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
        $con=Auth::user()->contact;
        $add=$con->address;
        Mapper::map($add->latitude,$add->longitude,['draggable' => true]);
        $data=array('ville'=>City::all(),'userV'=>$add->city_id);
        return view('user.edit')->withData($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //Validate the data
        $this->validate($request,array(
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
        ));
        //save the data to the database
        $user=Auth::user();
        $user->name=$request->input('name');
        $user->email=$request->input('email');
        $user->save();
        return redirect()->route('user.edit');
    }
    public function address(Request $request)
    {
        $contact=Auth::user()->contact;
        $add=$contact->address;
        $add->street_address=$request->input('street_address');
        $add->city_id=$request->input('city_id');
        $add->latitude=$request->input('latitude');
        $add->longitude=$request->input('longitude');
        $add->save();
        return redirect()->route('user.edit');
    }
    public function contact(Request $request)
    {
        $contact=Auth::user()->contact;
        $contact->email=$request->input('email');
        $contact->phone=$request->input('phone');
        $contact->fax=$request->input('fax');
        $contact->facebook=$request->input('facebook');
        $contact->twitter=$request->input('twitter');
        $contact->instagram=$request->input('instagram');
        $contact->about=$request->input('about');
        $contact->save();
        return redirect()->route('user.edit');
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
