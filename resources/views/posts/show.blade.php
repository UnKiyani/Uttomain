@extends('layouts.app')

@section('content')

 <a href="/posts" class="btn btn-danger">Tilbage</a>
 <h1> {{$post->title}} </h1>
    <div>
        {!!$post->body!!}
    </div>
<hr>
    <small>Written on {{$post->created_at}} by {{$post->user->name}} </small>
    <hr>
   
    @auth 
        @if(Auth::user()->id == $post->user_id)
    <a href="/posts/{{$post->id}}/edit" class="btn btn-light">Edit</a>

    {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'btn float-right'])!!}
     {{Form::hidden('_method', 'DELETE')}}
     {{Form::submit('delete', ['class' => 'btn btn-danger', 'onclick' => 'return confirm("Are you sure?")' ])}}
    {!!Form::close()!!}
        @endif
    @endauth

@endsection

