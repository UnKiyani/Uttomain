@extends('layouts.app')

@section('content')
        <h1>Kurv</h1>
        @if(session()->has('cart'))
        <div class="row">
                <div class="col-sm-6 col-md-6">
                        <ul class="list-group">
                                @foreach($products as $product)
                                  <li class="list-group-item">
                                  <span class="badge">{{$product['qty']}}</span>
                                  <strong>{{ $product['item']['title']}}</strong>
                                  <span class="label label-success">{{$product['price']}}</span>
                                  <button class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown" >Action</button>
                                  <ul class="dropdown-menu">
                                  <li><a href=" {{ route('product.reduceByOne', [ 'id' => $product['item']['id'] ]) }}">reduce by 1</a></li>
                                          <li><a href="{{ route('product.remove', [ 'id' => $product['item']['id'] ]) }}">reduce All</a></li>
                                  </ul>
                                  </li>

                                @endforeach
                        </ul>
                </div>
        </div>
        <div class="row">
                        <div class="col-sm-6 col-md-6">
                        <strong>{{$totalPrice}}</strong>
                        </div>
                </div>
                <hr>
        <div class="row">
                        <div class="col-sm-6 col-md-6">
                        <a type="button" href="{{route('checkout')}}" class="btn btn-success">CheckOut</a>
                        </div>
                </div>
        @else
        <div class="row">
                        <h2>No Items in Cart</h2>
                </div>   
        @endif

        
@endsection