@extends('layouts.app')

@section('content')

<div class="container">
    {{-- <div class="row justify-content-center">
        <div class="col-md-12">
            <a href="/stores/create" class="btn btn-primary">Add Store</a>
        </div>
    </div> --}}
    <div class="row justify-content-center">
        <div class="table-responsive">
            <table class="table align-items-center">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Store Name</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($stores as $store)
                        <tr>
                            <td>{{ $store->id }}</td>
                            <td>{{ $store->name }}</td>
                        </tr>    
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
