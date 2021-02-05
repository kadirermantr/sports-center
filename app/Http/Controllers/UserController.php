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

    public function show()
    {
        $id = Auth::user()->id;
        $user = User::find($id);

        return view('auth.account.general', compact('user'));
    }

    public function showDeleteAccount()
    {
        $id = Auth::user()->id;
        $user = User::find($id);

        return view('auth.account.delete-account', compact('user'));
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
