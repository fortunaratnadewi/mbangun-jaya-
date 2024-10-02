<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(StoreCustomerRequest $request)
    {
        //validate form 
        $request->validated([
            'kode_customer'     => 'required|min:18',
            'nama'              => 'required|min:18',
            'alamat'            => 'required|min:20',
            'no_telp'           => 'required|min:12',
            'email'             => 'required|min:20',
            'password'          => 'required|min:18'
            
        ]);

        //insert data ke dalam database, dimana menggunakan model customer 
        Customer::create([
            'kode_customer'     => $request->kode_customer,
            'nama'              => $request->nama,
            'alamat'            => $request->alamat,
            'no_telp'           => $request->no_telp,
            'email'             => $request->email,
            'password'          => $request->password,
        ]);

        return redirect()->route('Customer')->with(['success' => 'Data berhasil disimpan!']);
    }
       

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCustomerRequest $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
