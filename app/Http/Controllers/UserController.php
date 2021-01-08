<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function create()
    {
        return view('auth.register');
    }

    public function forgotPassword()
    {
        return view('auth.forgot-password');
    }

    public function store(Request $request)
    {
        //
    }

    public function show()
    {
        $id = Auth::user()->id;
        $users = User::find($id);

        return view('auth.account.general', compact('users'));
    }

    public function showDeleteAccount()
    {
        $id = Auth::user()->id;
        $users = User::find($id);

        return view('auth.account.delete-account', compact('users'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'nickname' => 'required|unique:users,nickname,'.$user->id,
            'email' => 'required|email|unique:users,email,'.$user->id,
        ]);

        $user->update($request->all());

        return redirect()->route('account')
            ->with('message', 'Kullanıcı bilgileri güncellendi.');
    }

    public function destroy()
    {
        Auth::user()->delete();
        Auth::logout();

        return redirect('/');
    }
}