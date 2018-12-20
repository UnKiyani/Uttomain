
@extends('layouts.app')

@section('content')
 <h1>plakater</h1>
     
 <p>vis alle produkter</p>
 <hr>

 <?php
  $numOfCols = 4;
  $rowCount = 0;
  $bootstrapColWidth = 12 / $numOfCols;
 ?>

<div class="row">
        @if(count($products) > 0 )
        @foreach($products as $product)
       
  <div class="col-md-{{$bootstrapColWidth}} product-div2 text-center h-100">
        <div class="card product-card-show" style="width: 100%;">
          <a href="/products/{{$product->id}}">
                <img style="width: 100%" src="/storage/product_images/{{$product->product_image}}">
                <div class="card-body pt-1">
                        <h3>{{$product->title}}</h3>
                        <p class="card-text">{!!$product->price!!} Kr</p>
                        <div class="button-view transition">
                        <a href="/products/{{$product->id}}" class="btn btn-secondary">Læg i kurv</a>
                        </div>
                        
                </div>
          </a>
        </div>
  </div>

  <?php
  $rowCount++;
  if($rowCount % $numOfCols == 0) echo '</div><div class="row">';?>

@endforeach
</div>
        {{$products->links()}}
     @else
        <p>No products found
     @endif
@endsection