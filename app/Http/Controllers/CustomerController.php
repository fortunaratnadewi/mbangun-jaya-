<?php

namespace App\Http\Controllers;

//import modal Customer 
use App\Models\Customer;
use GrahamCampbell\ResultType\Success;
use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller 
{
    // Register Customer
    public function register(Request $request)
    { 
{
    $request->validate([
        'nama'              => 'required|string',
        'alamat'            => 'required|string',
        'no_telp'           => 'required|string',
        'email'             => 'required|string|email|unique:customers,email', // pastikan email unik
        'password'          => 'required|string|confirmed'
    ]);

    $customer = Customer ::create([
        'nama'              => $request->nama,
        'alamat'            => $request->alamat,
        'no_telp'           => $request->no_telp,
        'email'             => $request->email,
        'password'          => Hash::make($request->password),
    ]);

    return redirect('/success'); 

    // Login otomatis setelah registrasi berhasil
    // Auth::login($customer);

    
}
    }

    // Login Customer
    public function login(Request $request)
{
    $request->validate([
        'email' => 'required|string|email|max:255',
        'password' => 'required|string|max:255',
    ]);
    
    $customer = Customer::where('email', $request->email)->first();

    if (! $customer || ! Hash::check($request->password, $customer->password)) {
        return redirect('/login')->with('error', 'Email atau password salah');
    }

    // Login sukses, gunakan Auth::login
    Auth::login($customer);

    return redirect('/')->with('success', 'Login berhasil');
}

    // Logout Customer
    // public function logout()
    // {
    //     Auth::logout();
    //     return response()->json(['message' => 'Logged out successfully!'], 200);
    // }
}