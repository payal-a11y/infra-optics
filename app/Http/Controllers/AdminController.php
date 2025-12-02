<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Show admin login form
    public function showLoginForm()
    {
        return view('admin.login');
    }

    // Handle admin login POST
    public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required'
        ]);

        // Hardcoded admin credentials
        if ($request->email === "admin@gmail.com" && $request->password === "123456") {
            // Mark admin as logged in using session
            session(['admin_logged_in' => true]);

            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors(['email' => 'Invalid admin credentials']);
    }

    // Admin dashboard
    public function dashboard(Request $request)
    {
        // Check if admin is logged in
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login');
        }

        return view('admin.dashboard');
    }

    // Logout admin
    public function logout(Request $request)
    {
        session()->forget('admin_logged_in');
        return redirect()->route('admin.login');
    }
}
