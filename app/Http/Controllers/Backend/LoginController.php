<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Gallery;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\User;
use Carbon\Carbon;
use Hash;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except([
            'logout', 'dashboard'
        ]);
    }

    public function login()
    {
        return view ('pages.backend.login');
    }

    public function signIn(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            return redirect()->route('dashboard')
                ->withSuccess('You have successfully logged in!');
        }

        return back()
            ->withErrors(['email' => 'Your provided credentials do not match in our records.'])
            ->onlyInput('email');
    }

    public function dashboard()
    {
        if (Auth::check()) {
            $galleries = Gallery::all()->count();
            $clients = Client::all()->count();
            $products = Product::all()->count();
            $categories = ProductCategory::all()->count();

            return view('pages.backend.dashboard',
            [
                'clients' => $clients,
                'galleries' => $galleries,
                'categories' => $categories,
                'products' => $products
            ]);
        }

        return redirect()->route('login')->withSuccess('You are not allowed to access');
    }

    public function logout(Request $request) {

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')
            ->withSuccess('You have logged out successfully!');;
    }
}
