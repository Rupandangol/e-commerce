@extends('admin.layout.admin')


@section('content')

    <h3>Products</h3>
    <ul>

        @forelse($products as $product)
            <li>
                <h3>Name of product:{{$product->name}}</h3>
            </li>

            @empty
                <h4>no product</h4>
            @endforelse

    </ul>



@endsection