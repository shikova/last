<?php

namespace App\Http\Controllers;

use App\City;
use App\Speciality;
use App\User;
use Cornford\Googlmapper\Facades\MapperFacade as Mapper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image as Image;

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
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($username)
    {
        $user = User::where('username', '=', $username)->first();
        $add = $user->contact->address;
        Mapper::map($add->latitude, $add->longitude);
        return view('user.public.profile')->withUser($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit_profile()
    {
        $con = Auth::user()->contact;
        $add = $con->address;
        Mapper::map($add->latitude, $add->longitude, ['draggable' => true]);
        $data = array('ville' => City::all());
        return view('user.private.profile_edit')->withData($data);
    }

    public function edit_account()
    {
        $con = Auth::user()->contact;

        $add = $con->address;
        Mapper::map($add->latitude, $add->longitude, ['draggable' => true]);
        $data = array('ville' => City::all());
        return view('user.private.account_edit')->withData($data);
    }
    public function edit_password()
    {
        return view('user.private.password_edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //Validate the data
        $this->validate($request, array(
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string',
        ));
        session()->flash('message', 'Failed to update account details: passwords doesn\'t match');
        session()->flash('alert-class', 'alert-danger');

        $user = Auth::user();
        if (Hash::check($request->input('password'), $user->password)) {
            // The passwords match...
            //save the data to the database
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->save();
            session()->flash('message', 'account details updated successfully');
            session()->flash('alert-class', 'alert-success');
        }

        return redirect()->route('user.edit.account');
    }

    public function address(Request $request)
    {
        $contact = Auth::user()->contact;
        $add = $contact->address;
        $add->street_address = $request->input('street_address');
        $add->city_id = $request->input('city_id');
        $add->latitude = $request->input('latitude');
        $add->longitude = $request->input('longitude');
        $add->save();
        return redirect()->route('user.edit.profile');
    }

    public function contact(Request $request)
    {
        $contact = Auth::user()->contact;
        $contact->email = $request->input('email');
        $contact->phone = $request->input('phone');
        $contact->fax = $request->input('fax');
        $contact->facebook = $request->input('facebook');
        $contact->twitter = $request->input('twitter');
        $contact->instagram = $request->input('instagram');
        $contact->about = $request->input('about');
        $contact->save();
        return redirect()->route('user.edit');
    }


    public function update_avatar(Request $request)
    {

        // Handle the user upload of avatar
        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar->getRealPath())->resize(300, 300)->save(public_path('storage/uploads/' . $filename));

            $user = Auth::user();
            $user->avatar = 'storage/uploads/' . $filename;
            $user->save();
        }
        return redirect()->route('user.edit');
    }

    public function update_password(Request $request)
    {

        //Validate the data
        $this->validate($request, array(
            'old_password' => 'required|string|min:6',
            'password' => 'required|string|min:6|confirmed',
        ));
        session()->flash('message', 'Failed to update account details: old passwords doesn\'t match current password');
        session()->flash('alert-class', 'alert-danger');

        $user = Auth::user();
        if (Hash::check($request->input('old_password'), $user->password)) {
            // The passwords match...
            //save the data to the database
            $user->password = $request->input('password');
            $user->save();
            session()->flash('message', 'password updated successfully');
            session()->flash('alert-class', 'alert-success');
        }

        return redirect()->route('user.edit.account');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
