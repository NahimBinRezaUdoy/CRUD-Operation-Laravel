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

    public function show(Customer $customer)
    {
        return view('customer.show', compact('customer'));
    }
}
