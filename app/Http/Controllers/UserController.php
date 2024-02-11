<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('dashboard.users.index',compact('users'));
    }

    public function create()
    {
        return view('dashboard.users.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
           'name' => 'required|min:3',
           'username' => 'required|max:50|unique:users',
           'email' => 'required|email|max:50|unique:users',
           'password' => 'required|max:50',
           'roles' => 'required',
        ]);

        $data['password'] = bcrypt($data['password']);

        $createdUser = User::create($data);

        if($createdUser){
            return redirect()->to('dashboard/users')->with('success','User Created Successfully');
        }

        abort(500);

    }

    public function edit(User $user)
    {
        return view('dashboard.users.edit',compact('user'));
    }

    public function update(User $user,Request $request)
    {
        $data = $request->validate([
            'name' => 'required|min:3',
            'username' => 'required|max:50|unique:users,username,' . $user->id,
            'email' => 'required|email|max:50|unique:users,email,' . $user->id,
            'roles' => 'required',
        ]);

        $data['password'] = $request->password ? bcrypt($request->password): $user->password;

        $createdUser = $user->update($data);

        if($createdUser){
            return redirect()->to('dashboard/users')->with('success','User Updated Successfully');
        }

        abort(500);
    }

    public function destroy(User $user)
    {
        if($user->delete()) {
            return redirect()->to('dashboard/users')->with('success','User Deleted Successfully');
        }

        abort(500);
    }

}
