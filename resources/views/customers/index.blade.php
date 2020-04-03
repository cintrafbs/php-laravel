@extends('layouts.index')
@section('content')
<h1>Clientes</h1>
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                <th>id</th>
                <th>name</th>
                <th>Cpf/Cnpj</th>
                <th>email</th>
                </tr>
            </thead>
            <tbody>
                @foreach($customers as $customer)
                <tr>
                <td>{{$customer->id}}</td>
                <td>{{$customer->name}}</td>
                <td>{{$customer->cpf_cnpj}}</td>
                <td>{{$customer->email}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

{{ $customers->links()}}
@endsection
