
@extends('layouts.app')

@section('content')
 

 <div class="row mt-5">
     <div class="col-lg-6">
            <img style="width: 100%" src="/storage/product_images/{{$product->product_image}}">
     </div>
     <div class="col-lg-6">
            <h1>{{$product->title}}</h1>
            <h4>{{$product->price}} Kr</h4>
            <hr>
            <p>{!!$product->disc!!}</p>

     <a href="{{ route('product.addToCart', ['id' => $product->id]) }}"><button type="button" class="btn btn-secondary btn-lg btn-block">Tilføj til indkøbskurven</button></a>
            
        </div>
    </div>      

    
    
 
@endsection