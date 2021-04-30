<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('customer.index', compact('customers'));
    }

    public function create()
    {
        return view('customer.create');
    }

    public function store(Request $request)
    {
        $data = request()->validate([
            'name' => 'required|max:255',
            'email' => 'required|email'
        ]);

        Customer::create($data);

        return redirect()->route('customer.index');
    }

    // public function show($customer)
    // {
    //     $customerDetails = Customer::findOrFail($customer);

    //     return view('customer.show', compact('customerDetails'));
    // }

    public function show(Customer $customer)
    {
        return view('customer.show', compact('customer'));
    }

    public function edit(Customer $customer)
    {
        return view('customer.edit', compact('customer'));
    }

    public function update(Customer $customer, Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
        ]);

        $customer->update($data);

        return redirect()->route('customer.show', $customer->id);

        // return redirect('/customers/' . $customer->id . '/show');
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();

        return redirect()->route('customer.index');
    }
}
