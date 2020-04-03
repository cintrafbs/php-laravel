<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::paginate(10);
        return view('customers.index',['customers' => $customers]);
    }

    public function store() // Inserir
    {

    }

    public function update()
    {

    }

    public function create()
    {

    }

    public function edit()
    {

    }

    public function destroy() // deletar o registro
    {

    }
}
