<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\User; 

class AuthController extends Controller
{
    public function login(Request $request)
    {
        
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            // Check if the remember me checkbox is checked
            $remember = $request->has('remember');
            Auth::attempt(['email' => $request->email, 'password' => $request->password], $remember);

            return redirect()->route('admin.dashboard');
        }
        return redirect()->back()->withErrors(['email' => 'Invalid credentials']);
    }
}
