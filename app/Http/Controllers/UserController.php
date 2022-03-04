<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

use App\Models\User;

class UserController extends Controller
{
    public function UserList(){

        $alluser = User::all();

        return view('user.user_list', compact('alluser'));

    }

    public function UserAdd(){

        return view('user.user_add');
    }

    public function UserSave(Request $request){

            $validatedData = $request->validate([
                'first_name' => 'required|string|min:2',
                'last_name' => 'required|string|min:2',
                'email' => 'required|email',
                'birth_date' => 'nullable|date',
                'password' => 'required|string|min:6'
            ]);

            $user = new User();
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->email = $request->email;
            $user->birth_date = $request->birth_date;
            $user->password = Hash::make($request->password);
            $user->save();

            return redirect()->route('user.list')->with('success', 'Success! User created');

    }


    public function UserEdit($userId){

            $user = User::find($userId);

            return view('user.user_edit', compact('user'));
    }


    public function UserUpdate(Request $request, $userId){

            $validatedData = $request->validate([
                'first_name' => 'required|string|min:2',
                'last_name' => 'required|string|min:2',
                'email' => 'required|email',
                'birth_date' => 'nullable|date',
                'password' => 'required|string|min:6'
            ]);

            $user = User::find($userId);
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->email = $request->email;
            $user->birth_date = $request->birth_date;
            $user->password = Hash::make($request->password);
            $user->save();

            return redirect()->route('user.list')->with('success', 'Success! User updated');

    }


    public function UserDelete($userId){

            $user = User::find($userId);
            $user->delete();

            return redirect()->route('user.list')->with('success', 'Success! User deleted');
    }



}
