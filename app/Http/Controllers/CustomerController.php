<?php

namespace App\Http\Controllers;

//import modal Customer 
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

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

    return response()->json(['message' => 'Customer registered successfully!'], 201);
}

    }

    // Login Customer
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $customer = Customer ::where('email', $request->email)->first();

        if (! $customer || ! Hash::check($request->password, $customer->password)) {
            throw ValidationException::withMessages([
                'email' => ['Email tidak terdaftar'],
            ]);
        }

        Auth::login($customer);

        return response()->json(['message' => 'Login berhasil'], 200);
    }

    // Logout Customer
    // public function logout()
    // {
    //     Auth::logout();
    //     return response()->json(['message' => 'Logged out successfully!'], 200);
    // }
}

