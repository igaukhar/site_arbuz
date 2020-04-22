@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-header">Products</div>
                    <div class="pull-right">
                        <br>
                        <a class="btn btn-success ml-4 btn-sm" href="{{ route('author.products.create') }}"> Create New Product</a>
                    </div>
                    @if (session('warning-admin'))
                        <div class="alert alert-danger">
                            {{ session('warning-admin') }}
                        </div>
                    @endif

                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Price</th>
                                <th scope="col">Details</th>
                                <th scope="col">Type</th>
                                <th scope="col">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <th scope="row">{{ $product->product_id }}</th>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->price }}$</td>
                                    <td>{{ $product->detail }}</td>
                                    <td>{{ $product->type }}</td>
                                    <td>
                                        <form action="{{ route('author.products.destroy',$product->product_id) }}" method="POST">

                                            <a class="btn btn-info btn-sm" href="{{ route('author.products.show',$product->product_id) }}">Show</a>
                                            <a class="btn btn-primary btn-sm" href="{{ route('author.products.edit',$product->product_id) }}">Edit</a>

                                            @csrf
                                            {{ method_field('DELETE') }}
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
