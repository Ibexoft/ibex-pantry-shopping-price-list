@extends('layouts.app')

@section('content')

@include('categories.create')

<div class="container">
    <div class="row justify-content-center">
        <div class="table-responsive col-6">
            <table class="table align-items-center">
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->name }}</td>
                        </tr>    
                    @endforeach
                </tbody>
            </table>
        </div>        
    </div>
</div>

@endsection
