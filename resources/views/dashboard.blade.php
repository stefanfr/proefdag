@extends('layout')

@section('content')
    <table class="table table-sm">
        <thead>
        <tr>
            <th>#</th>
            <th>Product name</th>
            <th>SKU</th>
            <th>EAN</th>
            <th>Price</th>
            <th>Brand</th>
            <th>Size</th>
            <th>Stock</th>
            <th>Sold</th>
            <th>Winst</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr data-toggle="modal" data-target="#exampleModal" class="table-row">
                <td class="id">{{ $product->id }}</td>
                <td>{{ $product->product_name }}</td>
                <td>{{ $product->sku }}</td>
                <td>{{ $product->ean }}</td>
                <td>&euro; {{ number_format($product->price, 2, ',', '.') }}</td>
                <td>{{ $product->brand }}</td>
                <td>{{ $product->size }}</td>
                <td>{{ $product->stock }}</td>
                <td>{{ $data[$product->id]['soldAmount'] }}</td>
                <td v="{{ ($data[$product->id]['soldAmount'] * $product->price) - ($data[$product->id]['buyInPrice'] * $product->stock)   }}"
                    class="{{ ($data[$product->id]['soldAmount'] * $product->price) - ($data[$product->id]['buyInPrice'] * $product->stock)>0?'green' : 'red' }}">
                    &euro; {{ number_format(($data[$product->id]['soldAmount'] * $product->price) - ($data[$product->id]['buyInPrice'] * $product->stock), 2, ',', '.')   }}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Additional information</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@stop