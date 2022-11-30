<?php

namespace App\Http\Controllers;

use App\Models\dashboard;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.index', [
            "title" => "Dashboard",
            "section" => "dashboard",
        ]);
    }

    public function login()
    {
        return view('registrasi.login', [
            "title" => "Login",
            "section" => "Login",
        ]);
    }

    public function register()
    {
        return view('registrasi.register', [
            "title" => "Register",
            "section" => "Register",
        ]);
    }

    public function createAnAccount(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'username' => 'required',
            'password' => 'required'
        ]);
        $validatedData['password'] = bcrypt($validatedData['password']);
        // return $validatedData;
        User::create($validatedData);
        return redirect('/login');
    }

    public function loginIntoAnAccount(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/pesan');
        }
        return redirect('/login');;
    }

    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/login')->with('success', 'anda harus masuk terlebih dahulu');
    }

    public function showProfile(User $user)
    {
        $user = Auth::user();
        return view('registrasi.profile', [
            "title" => "Register",
            "section" => "Profile",
            "user" => $user,
        ]);
        // return redirect('/login')->with('success', 'anda harus masuk terlebih dahulu');
    }

    public function updateProfile(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'username' => 'required',
            'address' => 'required',
            'image' => 'image',
        ]);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }

            $validatedData['image'] = $request->file('image')->store('user-pp');
        }

        $validatedData['about'] = $request['about'];
        $updatedUser = User::findOrFail($user->id);
        $updatedUser->update($validatedData);
        return redirect('/')->with('success', 'Data have been updated!');

        // return redirect('/login')->with('success', 'anda harus masuk terlebih dahulu');
    }

    public function showListUser()
    {
        $users = User::all();
        return view('pengguna.index', [
            "title" => "Pengguna",
            "section" => "Master",
            "users" => $users,
        ]);
    }

    public function showUser(User $user)
    {
        return view('pengguna.updateRole', [
            "title" => "Pengguna",
            "section" => "Master",
            "user" => $user,
        ]);
    }

    public function updateRoleUser(User $user, Request $request)
    {
        $validatedData = $request->validate([
            'role' => 'required',
        ]);
        $user->update($validatedData);
        return redirect('/user')->with('success', 'Data have been updated!');
    }

    public function deleteUser(User $user)
    {
        $user->delete();
        return redirect('/user')->with('success', 'Data have been updated!');
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
        //
    }

    /**
     * Display the specified resource. 
     *
     * @param  \App\Models\dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function show(dashboard $dashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function edit(dashboard $dashboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, dashboard $dashboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function destroy(dashboard $dashboard)
    {
        //
    }
}
