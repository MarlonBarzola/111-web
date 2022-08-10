<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::all();
        return view('admin.customers.index', compact('customers'));
    }

    public function create()
    {
        return view('admin.customers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:customers',
            'file' => 'image|required' 
        ]);

        $customer = Customer::create($request->all());

        if($request->file('file')) {
            $url = Storage::disk('public')->put('customers', $request->file('file'));
            $customer->thumbnail = $url;
            $customer->save();
        }

        return redirect()->route('admin.customers.edit', compact('customer'))->with('info', 'El miembro se creó correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        return view('admin.customers.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {

        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'slug' => "required|unique:customers,slug,$customer->id",
            'file' => 'image' 
        ]);

        $customer->update($request->all());

        if($request->file('file')) {
            $url = Storage::disk('public')->put('customers', $request->file('file'));
    
            if($customer->thumbnail) {
                Storage::delete([$customer->thumbnail]);
            }

            $customer->thumbnail = $url;
            $customer->save();
        }

        return redirect()->route('admin.customers.edit', $customer)->with('info', 'El cliente se creó correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        if($customer->thumbnail) {
            Storage::delete([$customer->thumbnail]);
        }
        $customer->delete();
        return redirect()->route('admin.customers.index')->with('info', 'El cliente se eliminó correctamente');
    }
}
