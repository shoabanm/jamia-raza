<?php

namespace App\Http\Controllers;


use App\Models\Department;
use App\Models\Event;
use App\Models\News;
use App\Models\User;
use App\Models\Services\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

        public function allUsers(Request $request)
    {
        // Fetch all users, paginate 15 per page
        $users = User::orderBy('created_at', 'desc')->paginate(2);

        // Return a view under resources/views/admin/users/index.blade.php
        return view('admin.users', compact('users'));
    }
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $departments = count(Department::all());
        $services = count(Service::all());
        $events = count(Event::all());
        $news = count(News::all());
        return view('admin/home', compact('departments', 'services', 'events', 'news'));
    }

     public function profile()
    {
        $user = Auth::user();
        return view('admin/profile', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        $data = $request->validate([
            'name'                  => 'required|string|max:255',
            'email'                 => 'required|email|max:255|unique:users,email,' . $user->id,
            'password'              => 'nullable|confirmed|min:8',
        ]);

        $user->name = $data['name'];
        $user->email = $data['email'];

        // If a new password was provided, hash it before saving
        if (!empty($data['password'])) {
            $user->password = Hash::make($data['password']);
        }

        // Save changes
        $user->save();

        // Redirect back to /profile (GET) with a success message
        return redirect()
            ->route('profile')
            ->with('success', 'Your profile has been updated successfully.');
    }

}
